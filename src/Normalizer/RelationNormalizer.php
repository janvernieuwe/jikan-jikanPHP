<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\MalUrl;
use Jikan\JikanPHP\Model\Relation;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class RelationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return Relation::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof Relation;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|Relation
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $relation = new Relation();
        if (null === $data || !\is_array($data)) {
            return $relation;
        }

        if (\array_key_exists('relation', $data)) {
            $relation->setRelation($data['relation']);
        }

        if (\array_key_exists('entry', $data)) {
            $values = [];
            foreach ($data['entry'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, MalUrl::class, 'json', $context);
            }

            $relation->setEntry($values);
        }

        return $relation;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getRelation()) {
            $data['relation'] = $object->getRelation();
        }

        if (null !== $object->getEntry()) {
            $values = [];
            foreach ($object->getEntry() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $data['entry'] = $values;
        }

        return $data;
    }
}

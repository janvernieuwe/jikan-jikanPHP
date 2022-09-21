<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\RecommendationsdataItem;
use Jikan\JikanPHP\Model\UserById;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class RecommendationsdataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return RecommendationsdataItem::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof RecommendationsdataItem;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|RecommendationsdataItem
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $recommendationsdataItem = new RecommendationsdataItem();
        if (null === $data || !\is_array($data)) {
            return $recommendationsdataItem;
        }

        if (\array_key_exists('mal_id', $data)) {
            $recommendationsdataItem->setMalId($data['mal_id']);
        }

        if (\array_key_exists('entry', $data)) {
            $values = [];
            foreach ($data['entry'] as $value) {
                $values[] = $value;
            }

            $recommendationsdataItem->setEntry($values);
        }

        if (\array_key_exists('content', $data)) {
            $recommendationsdataItem->setContent($data['content']);
        }

        if (\array_key_exists('user', $data)) {
            $recommendationsdataItem->setUser($this->denormalizer->denormalize($data['user'], UserById::class, 'json', $context));
        }

        return $recommendationsdataItem;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getMalId()) {
            $data['mal_id'] = $object->getMalId();
        }

        if (null !== $object->getEntry()) {
            $values = [];
            foreach ($object->getEntry() as $value) {
                $values[] = $value;
            }

            $data['entry'] = $values;
        }

        if (null !== $object->getContent()) {
            $data['content'] = $object->getContent();
        }

        if (null !== $object->getUser()) {
            $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
        }

        return $data;
    }
}

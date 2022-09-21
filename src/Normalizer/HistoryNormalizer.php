<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\History;
use Jikan\JikanPHP\Model\MalUrl;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class HistoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return History::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof History;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|History
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $history = new History();
        if (null === $data || !\is_array($data)) {
            return $history;
        }

        if (\array_key_exists('entry', $data)) {
            $history->setEntry($this->denormalizer->denormalize($data['entry'], MalUrl::class, 'json', $context));
        }

        if (\array_key_exists('increment', $data)) {
            $history->setIncrement($data['increment']);
        }

        if (\array_key_exists('date', $data)) {
            $history->setDate($data['date']);
        }

        return $history;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getEntry()) {
            $data['entry'] = $this->normalizer->normalize($object->getEntry(), 'json', $context);
        }

        if (null !== $object->getIncrement()) {
            $data['increment'] = $object->getIncrement();
        }

        if (null !== $object->getDate()) {
            $data['date'] = $object->getDate();
        }

        return $data;
    }
}

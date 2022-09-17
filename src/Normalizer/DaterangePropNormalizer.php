<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DaterangePropNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Jikan\\JikanPHP\\Model\\DaterangeProp' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && 'Jikan\\JikanPHP\\Model\\DaterangeProp' === get_class($data);
    }

    /**
     * @param mixed      $data
     * @param mixed      $class
     * @param null|mixed $format
     *
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jikan\JikanPHP\Model\DaterangeProp();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('from', $data)) {
            $object->setFrom($this->denormalizer->denormalize($data['from'], 'Jikan\\JikanPHP\\Model\\DaterangePropFrom', 'json', $context));
        }
        if (\array_key_exists('to', $data)) {
            $object->setTo($this->denormalizer->denormalize($data['to'], 'Jikan\\JikanPHP\\Model\\DaterangePropTo', 'json', $context));
        }
        if (\array_key_exists('string', $data) && null !== $data['string']) {
            $object->setString($data['string']);
        } elseif (\array_key_exists('string', $data) && null === $data['string']) {
            $object->setString(null);
        }

        return $object;
    }

    /**
     * @param mixed      $object
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getFrom()) {
            $data['from'] = $this->normalizer->normalize($object->getFrom(), 'json', $context);
        }
        if (null !== $object->getTo()) {
            $data['to'] = $this->normalizer->normalize($object->getTo(), 'json', $context);
        }
        if (null !== $object->getString()) {
            $data['string'] = $object->getString();
        }

        return $data;
    }
}

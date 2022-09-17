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

class DaterangePropFromNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Jikan\\JikanPHP\\Model\\DaterangePropFrom' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && 'Jikan\\JikanPHP\\Model\\DaterangePropFrom' === get_class($data);
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
        $object = new \Jikan\JikanPHP\Model\DaterangePropFrom();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('day', $data) && null !== $data['day']) {
            $object->setDay($data['day']);
        } elseif (\array_key_exists('day', $data) && null === $data['day']) {
            $object->setDay(null);
        }
        if (\array_key_exists('month', $data) && null !== $data['month']) {
            $object->setMonth($data['month']);
        } elseif (\array_key_exists('month', $data) && null === $data['month']) {
            $object->setMonth(null);
        }
        if (\array_key_exists('year', $data) && null !== $data['year']) {
            $object->setYear($data['year']);
        } elseif (\array_key_exists('year', $data) && null === $data['year']) {
            $object->setYear(null);
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
        if (null !== $object->getDay()) {
            $data['day'] = $object->getDay();
        }
        if (null !== $object->getMonth()) {
            $data['month'] = $object->getMonth();
        }
        if (null !== $object->getYear()) {
            $data['year'] = $object->getYear();
        }

        return $data;
    }
}

<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\DaterangePropTo;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DaterangePropToNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return DaterangePropTo::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof DaterangePropTo;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|DaterangePropTo
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $daterangePropTo = new DaterangePropTo();
        if (null === $data || !\is_array($data)) {
            return $daterangePropTo;
        }

        if (\array_key_exists('day', $data) && null !== $data['day']) {
            $daterangePropTo->setDay($data['day']);
        } elseif (\array_key_exists('day', $data) && null === $data['day']) {
            $daterangePropTo->setDay(null);
        }

        if (\array_key_exists('month', $data) && null !== $data['month']) {
            $daterangePropTo->setMonth($data['month']);
        } elseif (\array_key_exists('month', $data) && null === $data['month']) {
            $daterangePropTo->setMonth(null);
        }

        if (\array_key_exists('year', $data) && null !== $data['year']) {
            $daterangePropTo->setYear($data['year']);
        } elseif (\array_key_exists('year', $data) && null === $data['year']) {
            $daterangePropTo->setYear(null);
        }

        return $daterangePropTo;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
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

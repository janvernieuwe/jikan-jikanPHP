<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\DaterangeProp;
use Jikan\JikanPHP\Model\DaterangePropFrom;
use Jikan\JikanPHP\Model\DaterangePropTo;
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
        return DaterangeProp::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof DaterangeProp;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|DaterangeProp
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $daterangeProp = new DaterangeProp();
        if (null === $data || !\is_array($data)) {
            return $daterangeProp;
        }

        if (\array_key_exists('from', $data)) {
            $daterangeProp->setFrom($this->denormalizer->denormalize($data['from'], DaterangePropFrom::class, 'json', $context));
        }

        if (\array_key_exists('to', $data)) {
            $daterangeProp->setTo($this->denormalizer->denormalize($data['to'], DaterangePropTo::class, 'json', $context));
        }

        if (\array_key_exists('string', $data) && null !== $data['string']) {
            $daterangeProp->setString($data['string']);
        } elseif (\array_key_exists('string', $data) && null === $data['string']) {
            $daterangeProp->setString(null);
        }

        return $daterangeProp;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
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

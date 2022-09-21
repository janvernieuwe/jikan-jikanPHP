<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\Daterange;
use Jikan\JikanPHP\Model\DaterangeProp;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DaterangeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return Daterange::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof Daterange;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|Daterange
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $daterange = new Daterange();
        if (null === $data || !\is_array($data)) {
            return $daterange;
        }

        if (\array_key_exists('from', $data) && null !== $data['from']) {
            $daterange->setFrom($data['from']);
        } elseif (\array_key_exists('from', $data) && null === $data['from']) {
            $daterange->setFrom(null);
        }

        if (\array_key_exists('to', $data) && null !== $data['to']) {
            $daterange->setTo($data['to']);
        } elseif (\array_key_exists('to', $data) && null === $data['to']) {
            $daterange->setTo(null);
        }

        if (\array_key_exists('prop', $data)) {
            $daterange->setProp($this->denormalizer->denormalize($data['prop'], DaterangeProp::class, 'json', $context));
        }

        return $daterange;
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
            $data['from'] = $object->getFrom();
        }

        if (null !== $object->getTo()) {
            $data['to'] = $object->getTo();
        }

        if (null !== $object->getProp()) {
            $data['prop'] = $this->normalizer->normalize($object->getProp(), 'json', $context);
        }

        return $data;
    }
}

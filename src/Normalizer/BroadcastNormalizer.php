<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\Broadcast;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class BroadcastNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return Broadcast::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof Broadcast;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|Broadcast
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $broadcast = new Broadcast();
        if (null === $data || !\is_array($data)) {
            return $broadcast;
        }

        if (\array_key_exists('day', $data) && null !== $data['day']) {
            $broadcast->setDay($data['day']);
        } elseif (\array_key_exists('day', $data) && null === $data['day']) {
            $broadcast->setDay(null);
        }

        if (\array_key_exists('time', $data) && null !== $data['time']) {
            $broadcast->setTime($data['time']);
        } elseif (\array_key_exists('time', $data) && null === $data['time']) {
            $broadcast->setTime(null);
        }

        if (\array_key_exists('timezone', $data) && null !== $data['timezone']) {
            $broadcast->setTimezone($data['timezone']);
        } elseif (\array_key_exists('timezone', $data) && null === $data['timezone']) {
            $broadcast->setTimezone(null);
        }

        if (\array_key_exists('string', $data) && null !== $data['string']) {
            $broadcast->setString($data['string']);
        } elseif (\array_key_exists('string', $data) && null === $data['string']) {
            $broadcast->setString(null);
        }

        return $broadcast;
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

        if (null !== $object->getTime()) {
            $data['time'] = $object->getTime();
        }

        if (null !== $object->getTimezone()) {
            $data['timezone'] = $object->getTimezone();
        }

        if (null !== $object->getString()) {
            $data['string'] = $object->getString();
        }

        return $data;
    }
}

<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\Broadcast;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Jikan\JikanPHP\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) || (Kernel::MAJOR_VERSION >= 7 || Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4)) {
    class BroadcastNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return Broadcast::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof Broadcast;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new Broadcast();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('day', $data) && null !== $data['day']) {
                $object->setDay($data['day']);
                unset($data['day']);
            } elseif (\array_key_exists('day', $data) && null === $data['day']) {
                $object->setDay(null);
            }

            if (\array_key_exists('time', $data) && null !== $data['time']) {
                $object->setTime($data['time']);
                unset($data['time']);
            } elseif (\array_key_exists('time', $data) && null === $data['time']) {
                $object->setTime(null);
            }

            if (\array_key_exists('timezone', $data) && null !== $data['timezone']) {
                $object->setTimezone($data['timezone']);
                unset($data['timezone']);
            } elseif (\array_key_exists('timezone', $data) && null === $data['timezone']) {
                $object->setTimezone(null);
            }

            if (\array_key_exists('string', $data) && null !== $data['string']) {
                $object->setString($data['string']);
                unset($data['string']);
            } elseif (\array_key_exists('string', $data) && null === $data['string']) {
                $object->setString(null);
            }

            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('day') && null !== $object->getDay()) {
                $data['day'] = $object->getDay();
            }

            if ($object->isInitialized('time') && null !== $object->getTime()) {
                $data['time'] = $object->getTime();
            }

            if ($object->isInitialized('timezone') && null !== $object->getTimezone()) {
                $data['timezone'] = $object->getTimezone();
            }

            if ($object->isInitialized('string') && null !== $object->getString()) {
                $data['string'] = $object->getString();
            }

            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [Broadcast::class => false];
        }
    }
} else {
    class BroadcastNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return Broadcast::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof Broadcast;
        }

        /**
         * @param null|mixed $format
         */
        public function denormalize($data, $type, $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new Broadcast();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('day', $data) && null !== $data['day']) {
                $object->setDay($data['day']);
                unset($data['day']);
            } elseif (\array_key_exists('day', $data) && null === $data['day']) {
                $object->setDay(null);
            }

            if (\array_key_exists('time', $data) && null !== $data['time']) {
                $object->setTime($data['time']);
                unset($data['time']);
            } elseif (\array_key_exists('time', $data) && null === $data['time']) {
                $object->setTime(null);
            }

            if (\array_key_exists('timezone', $data) && null !== $data['timezone']) {
                $object->setTimezone($data['timezone']);
                unset($data['timezone']);
            } elseif (\array_key_exists('timezone', $data) && null === $data['timezone']) {
                $object->setTimezone(null);
            }

            if (\array_key_exists('string', $data) && null !== $data['string']) {
                $object->setString($data['string']);
                unset($data['string']);
            } elseif (\array_key_exists('string', $data) && null === $data['string']) {
                $object->setString(null);
            }

            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        /**
         * @param null|mixed $format
         */
        public function normalize($object, $format = null, array $context = []): array|\ArrayObject|bool|float|int|string|null
        {
            $data = [];
            if ($object->isInitialized('day') && null !== $object->getDay()) {
                $data['day'] = $object->getDay();
            }

            if ($object->isInitialized('time') && null !== $object->getTime()) {
                $data['time'] = $object->getTime();
            }

            if ($object->isInitialized('timezone') && null !== $object->getTimezone()) {
                $data['timezone'] = $object->getTimezone();
            }

            if ($object->isInitialized('string') && null !== $object->getString()) {
                $data['string'] = $object->getString();
            }

            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [Broadcast::class => false];
        }
    }
}

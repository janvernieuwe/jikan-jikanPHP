<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\DaterangeProp;
use Jikan\JikanPHP\Model\DaterangePropFrom;
use Jikan\JikanPHP\Model\DaterangePropTo;
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
    class DaterangePropNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return DaterangeProp::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof DaterangeProp;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new DaterangeProp();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('from', $data)) {
                $object->setFrom($this->denormalizer->denormalize($data['from'], DaterangePropFrom::class, 'json', $context));
                unset($data['from']);
            }

            if (\array_key_exists('to', $data)) {
                $object->setTo($this->denormalizer->denormalize($data['to'], DaterangePropTo::class, 'json', $context));
                unset($data['to']);
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
            if ($object->isInitialized('from') && null !== $object->getFrom()) {
                $data['from'] = $this->normalizer->normalize($object->getFrom(), 'json', $context);
            }

            if ($object->isInitialized('to') && null !== $object->getTo()) {
                $data['to'] = $this->normalizer->normalize($object->getTo(), 'json', $context);
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
            return [DaterangeProp::class => false];
        }
    }
} else {
    class DaterangePropNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return DaterangeProp::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof DaterangeProp;
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

            $object = new DaterangeProp();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('from', $data)) {
                $object->setFrom($this->denormalizer->denormalize($data['from'], DaterangePropFrom::class, 'json', $context));
                unset($data['from']);
            }

            if (\array_key_exists('to', $data)) {
                $object->setTo($this->denormalizer->denormalize($data['to'], DaterangePropTo::class, 'json', $context));
                unset($data['to']);
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
            if ($object->isInitialized('from') && null !== $object->getFrom()) {
                $data['from'] = $this->normalizer->normalize($object->getFrom(), 'json', $context);
            }

            if ($object->isInitialized('to') && null !== $object->getTo()) {
                $data['to'] = $this->normalizer->normalize($object->getTo(), 'json', $context);
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
            return [DaterangeProp::class => false];
        }
    }
}

<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jikan\JikanPHP\Model\History;
use Jikan\JikanPHP\Model\MalUrl;
use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
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
    class HistoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return History::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof History;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new History();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('entry', $data)) {
                $object->setEntry($this->denormalizer->denormalize($data['entry'], MalUrl::class, 'json', $context));
                unset($data['entry']);
            }

            if (\array_key_exists('increment', $data)) {
                $object->setIncrement($data['increment']);
                unset($data['increment']);
            }

            if (\array_key_exists('date', $data)) {
                $object->setDate($data['date']);
                unset($data['date']);
            }

            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('entry') && null !== $object->getEntry()) {
                $data['entry'] = $this->normalizer->normalize($object->getEntry(), 'json', $context);
            }

            if ($object->isInitialized('increment') && null !== $object->getIncrement()) {
                $data['increment'] = $object->getIncrement();
            }

            if ($object->isInitialized('date') && null !== $object->getDate()) {
                $data['date'] = $object->getDate();
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
            return [History::class => false];
        }
    }
} else {
    class HistoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return History::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof History;
        }

        /**
         * @param null|mixed $format
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new History();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('entry', $data)) {
                $object->setEntry($this->denormalizer->denormalize($data['entry'], MalUrl::class, 'json', $context));
                unset($data['entry']);
            }

            if (\array_key_exists('increment', $data)) {
                $object->setIncrement($data['increment']);
                unset($data['increment']);
            }

            if (\array_key_exists('date', $data)) {
                $object->setDate($data['date']);
                unset($data['date']);
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
         *
         * @return array|string|int|float|bool|ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('entry') && null !== $object->getEntry()) {
                $data['entry'] = $this->normalizer->normalize($object->getEntry(), 'json', $context);
            }

            if ($object->isInitialized('increment') && null !== $object->getIncrement()) {
                $data['increment'] = $object->getIncrement();
            }

            if ($object->isInitialized('date') && null !== $object->getDate()) {
                $data['date'] = $object->getDate();
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
            return [History::class => false];
        }
    }
}

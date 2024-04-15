<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\Anime;
use Jikan\JikanPHP\Model\AnimeSearch;
use Jikan\JikanPHP\Model\PaginationPlusPagination;
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
    class AnimeSearchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return AnimeSearch::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof AnimeSearch;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new AnimeSearch();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('data', $data)) {
                $values = [];
                foreach ($data['data'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, Anime::class, 'json', $context);
                }

                $object->setData($values);
                unset($data['data']);
            }

            if (\array_key_exists('pagination', $data)) {
                $object->setPagination($this->denormalizer->denormalize($data['pagination'], PaginationPlusPagination::class, 'json', $context));
                unset($data['pagination']);
            }

            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('data') && null !== $object->getData()) {
                $values = [];
                foreach ($object->getData() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['data'] = $values;
            }

            if ($object->isInitialized('pagination') && null !== $object->getPagination()) {
                $data['pagination'] = $this->normalizer->normalize($object->getPagination(), 'json', $context);
            }

            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [AnimeSearch::class => false];
        }
    }
} else {
    class AnimeSearchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return AnimeSearch::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof AnimeSearch;
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

            $object = new AnimeSearch();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('data', $data)) {
                $values = [];
                foreach ($data['data'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, Anime::class, 'json', $context);
                }

                $object->setData($values);
                unset($data['data']);
            }

            if (\array_key_exists('pagination', $data)) {
                $object->setPagination($this->denormalizer->denormalize($data['pagination'], PaginationPlusPagination::class, 'json', $context));
                unset($data['pagination']);
            }

            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            if ($object->isInitialized('data') && null !== $object->getData()) {
                $values = [];
                foreach ($object->getData() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['data'] = $values;
            }

            if ($object->isInitialized('pagination') && null !== $object->getPagination()) {
                $data['pagination'] = $this->normalizer->normalize($object->getPagination(), 'json', $context);
            }

            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [AnimeSearch::class => false];
        }
    }
}

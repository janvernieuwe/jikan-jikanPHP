<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\PaginationPlusPagination;
use Jikan\JikanPHP\Model\PaginationPlusPaginationItems;
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
    class PaginationPlusPaginationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return PaginationPlusPagination::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof PaginationPlusPagination;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new PaginationPlusPagination();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('last_visible_page', $data)) {
                $object->setLastVisiblePage($data['last_visible_page']);
                unset($data['last_visible_page']);
            }

            if (\array_key_exists('has_next_page', $data)) {
                $object->setHasNextPage($data['has_next_page']);
                unset($data['has_next_page']);
            }

            if (\array_key_exists('items', $data)) {
                $object->setItems($this->denormalizer->denormalize($data['items'], PaginationPlusPaginationItems::class, 'json', $context));
                unset($data['items']);
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
            if ($object->isInitialized('lastVisiblePage') && null !== $object->getLastVisiblePage()) {
                $data['last_visible_page'] = $object->getLastVisiblePage();
            }

            if ($object->isInitialized('hasNextPage') && null !== $object->getHasNextPage()) {
                $data['has_next_page'] = $object->getHasNextPage();
            }

            if ($object->isInitialized('items') && null !== $object->getItems()) {
                $data['items'] = $this->normalizer->normalize($object->getItems(), 'json', $context);
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
            return [PaginationPlusPagination::class => false];
        }
    }
} else {
    class PaginationPlusPaginationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return PaginationPlusPagination::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof PaginationPlusPagination;
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

            $object = new PaginationPlusPagination();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('last_visible_page', $data)) {
                $object->setLastVisiblePage($data['last_visible_page']);
                unset($data['last_visible_page']);
            }

            if (\array_key_exists('has_next_page', $data)) {
                $object->setHasNextPage($data['has_next_page']);
                unset($data['has_next_page']);
            }

            if (\array_key_exists('items', $data)) {
                $object->setItems($this->denormalizer->denormalize($data['items'], PaginationPlusPaginationItems::class, 'json', $context));
                unset($data['items']);
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
            if ($object->isInitialized('lastVisiblePage') && null !== $object->getLastVisiblePage()) {
                $data['last_visible_page'] = $object->getLastVisiblePage();
            }

            if ($object->isInitialized('hasNextPage') && null !== $object->getHasNextPage()) {
                $data['has_next_page'] = $object->getHasNextPage();
            }

            if ($object->isInitialized('items') && null !== $object->getItems()) {
                $data['items'] = $this->normalizer->normalize($object->getItems(), 'json', $context);
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
            return [PaginationPlusPagination::class => false];
        }
    }
}

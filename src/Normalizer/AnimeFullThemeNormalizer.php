<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jikan\JikanPHP\Model\AnimeFullTheme;
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
    class AnimeFullThemeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return AnimeFullTheme::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof AnimeFullTheme;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new AnimeFullTheme();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('openings', $data)) {
                $values = [];
                foreach ($data['openings'] as $value) {
                    $values[] = $value;
                }

                $object->setOpenings($values);
                unset($data['openings']);
            }

            if (\array_key_exists('endings', $data)) {
                $values_1 = [];
                foreach ($data['endings'] as $value_1) {
                    $values_1[] = $value_1;
                }

                $object->setEndings($values_1);
                unset($data['endings']);
            }

            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('openings') && null !== $object->getOpenings()) {
                $values = [];
                foreach ($object->getOpenings() as $value) {
                    $values[] = $value;
                }

                $data['openings'] = $values;
            }

            if ($object->isInitialized('endings') && null !== $object->getEndings()) {
                $values_1 = [];
                foreach ($object->getEndings() as $value_1) {
                    $values_1[] = $value_1;
                }

                $data['endings'] = $values_1;
            }

            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [AnimeFullTheme::class => false];
        }
    }
} else {
    class AnimeFullThemeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return AnimeFullTheme::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof AnimeFullTheme;
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

            $object = new AnimeFullTheme();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('openings', $data)) {
                $values = [];
                foreach ($data['openings'] as $value) {
                    $values[] = $value;
                }

                $object->setOpenings($values);
                unset($data['openings']);
            }

            if (\array_key_exists('endings', $data)) {
                $values_1 = [];
                foreach ($data['endings'] as $value_1) {
                    $values_1[] = $value_1;
                }

                $object->setEndings($values_1);
                unset($data['endings']);
            }

            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            if ($object->isInitialized('openings') && null !== $object->getOpenings()) {
                $values = [];
                foreach ($object->getOpenings() as $value) {
                    $values[] = $value;
                }

                $data['openings'] = $values;
            }

            if ($object->isInitialized('endings') && null !== $object->getEndings()) {
                $values_1 = [];
                foreach ($object->getEndings() as $value_1) {
                    $values_1[] = $value_1;
                }

                $data['endings'] = $values_1;
            }

            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [AnimeFullTheme::class => false];
        }
    }
}

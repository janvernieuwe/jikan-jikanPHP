<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jikan\JikanPHP\Model\UsersTempDataItemFavorites;
use Jikan\JikanPHP\Model\EntryMeta;
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
    class UsersTempDataItemFavoritesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return UsersTempDataItemFavorites::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof UsersTempDataItemFavorites;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new UsersTempDataItemFavorites();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('anime', $data)) {
                $values = [];
                foreach ($data['anime'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, EntryMeta::class, 'json', $context);
                }

                $object->setAnime($values);
                unset($data['anime']);
            }

            if (\array_key_exists('manga', $data)) {
                $values_1 = [];
                foreach ($data['manga'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, EntryMeta::class, 'json', $context);
                }

                $object->setManga($values_1);
                unset($data['manga']);
            }

            if (\array_key_exists('characters', $data)) {
                $values_2 = [];
                foreach ($data['characters'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, EntryMeta::class, 'json', $context);
                }

                $object->setCharacters($values_2);
                unset($data['characters']);
            }

            if (\array_key_exists('people', $data)) {
                $values_3 = [];
                foreach ($data['people'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, EntryMeta::class, 'json', $context);
                }

                $object->setPeople($values_3);
                unset($data['people']);
            }

            foreach ($data as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_4;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('anime') && null !== $object->getAnime()) {
                $values = [];
                foreach ($object->getAnime() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['anime'] = $values;
            }

            if ($object->isInitialized('manga') && null !== $object->getManga()) {
                $values_1 = [];
                foreach ($object->getManga() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }

                $data['manga'] = $values_1;
            }

            if ($object->isInitialized('characters') && null !== $object->getCharacters()) {
                $values_2 = [];
                foreach ($object->getCharacters() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }

                $data['characters'] = $values_2;
            }

            if ($object->isInitialized('people') && null !== $object->getPeople()) {
                $values_3 = [];
                foreach ($object->getPeople() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }

                $data['people'] = $values_3;
            }

            foreach ($object as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_4;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [UsersTempDataItemFavorites::class => false];
        }
    }
} else {
    class UsersTempDataItemFavoritesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return UsersTempDataItemFavorites::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof UsersTempDataItemFavorites;
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

            $object = new UsersTempDataItemFavorites();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('anime', $data)) {
                $values = [];
                foreach ($data['anime'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, EntryMeta::class, 'json', $context);
                }

                $object->setAnime($values);
                unset($data['anime']);
            }

            if (\array_key_exists('manga', $data)) {
                $values_1 = [];
                foreach ($data['manga'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, EntryMeta::class, 'json', $context);
                }

                $object->setManga($values_1);
                unset($data['manga']);
            }

            if (\array_key_exists('characters', $data)) {
                $values_2 = [];
                foreach ($data['characters'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, EntryMeta::class, 'json', $context);
                }

                $object->setCharacters($values_2);
                unset($data['characters']);
            }

            if (\array_key_exists('people', $data)) {
                $values_3 = [];
                foreach ($data['people'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, EntryMeta::class, 'json', $context);
                }

                $object->setPeople($values_3);
                unset($data['people']);
            }

            foreach ($data as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_4;
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
            if ($object->isInitialized('anime') && null !== $object->getAnime()) {
                $values = [];
                foreach ($object->getAnime() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['anime'] = $values;
            }

            if ($object->isInitialized('manga') && null !== $object->getManga()) {
                $values_1 = [];
                foreach ($object->getManga() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }

                $data['manga'] = $values_1;
            }

            if ($object->isInitialized('characters') && null !== $object->getCharacters()) {
                $values_2 = [];
                foreach ($object->getCharacters() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }

                $data['characters'] = $values_2;
            }

            if ($object->isInitialized('people') && null !== $object->getPeople()) {
                $values_3 = [];
                foreach ($object->getPeople() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }

                $data['people'] = $values_3;
            }

            foreach ($object as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_4;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [UsersTempDataItemFavorites::class => false];
        }
    }
}

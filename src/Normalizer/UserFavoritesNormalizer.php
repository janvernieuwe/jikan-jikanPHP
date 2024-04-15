<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\CharacterMeta;
use Jikan\JikanPHP\Model\UserFavorites;
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
    class UserFavoritesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return UserFavorites::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof UserFavorites;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new UserFavorites();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('anime', $data)) {
                $values = [];
                foreach ($data['anime'] as $value) {
                    $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value as $key => $value_1) {
                        $values_1[$key] = $value_1;
                    }

                    $values[] = $values_1;
                }

                $object->setAnime($values);
                unset($data['anime']);
            }

            if (\array_key_exists('manga', $data)) {
                $values_2 = [];
                foreach ($data['manga'] as $value_2) {
                    $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value_2 as $key_1 => $value_3) {
                        $values_3[$key_1] = $value_3;
                    }

                    $values_2[] = $values_3;
                }

                $object->setManga($values_2);
                unset($data['manga']);
            }

            if (\array_key_exists('characters', $data)) {
                $values_4 = [];
                foreach ($data['characters'] as $value_4) {
                    $values_5 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value_4 as $key_2 => $value_5) {
                        $values_5[$key_2] = $value_5;
                    }

                    $values_4[] = $values_5;
                }

                $object->setCharacters($values_4);
                unset($data['characters']);
            }

            if (\array_key_exists('people', $data)) {
                $values_6 = [];
                foreach ($data['people'] as $value_6) {
                    $values_6[] = $this->denormalizer->denormalize($value_6, CharacterMeta::class, 'json', $context);
                }

                $object->setPeople($values_6);
                unset($data['people']);
            }

            foreach ($data as $key_3 => $value_7) {
                if (preg_match('/.*/', (string) $key_3)) {
                    $object[$key_3] = $value_7;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('anime') && null !== $object->getAnime()) {
                $values = [];
                foreach ($object->getAnime() as $value) {
                    $values_1 = [];
                    foreach ($value as $key => $value_1) {
                        $values_1[$key] = $value_1;
                    }

                    $values[] = $values_1;
                }

                $data['anime'] = $values;
            }

            if ($object->isInitialized('manga') && null !== $object->getManga()) {
                $values_2 = [];
                foreach ($object->getManga() as $value_2) {
                    $values_3 = [];
                    foreach ($value_2 as $key_1 => $value_3) {
                        $values_3[$key_1] = $value_3;
                    }

                    $values_2[] = $values_3;
                }

                $data['manga'] = $values_2;
            }

            if ($object->isInitialized('characters') && null !== $object->getCharacters()) {
                $values_4 = [];
                foreach ($object->getCharacters() as $value_4) {
                    $values_5 = [];
                    foreach ($value_4 as $key_2 => $value_5) {
                        $values_5[$key_2] = $value_5;
                    }

                    $values_4[] = $values_5;
                }

                $data['characters'] = $values_4;
            }

            if ($object->isInitialized('people') && null !== $object->getPeople()) {
                $values_6 = [];
                foreach ($object->getPeople() as $value_6) {
                    $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
                }

                $data['people'] = $values_6;
            }

            foreach ($object as $key_3 => $value_7) {
                if (preg_match('/.*/', (string) $key_3)) {
                    $data[$key_3] = $value_7;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [UserFavorites::class => false];
        }
    }
} else {
    class UserFavoritesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return UserFavorites::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof UserFavorites;
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

            $object = new UserFavorites();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('anime', $data)) {
                $values = [];
                foreach ($data['anime'] as $value) {
                    $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value as $key => $value_1) {
                        $values_1[$key] = $value_1;
                    }

                    $values[] = $values_1;
                }

                $object->setAnime($values);
                unset($data['anime']);
            }

            if (\array_key_exists('manga', $data)) {
                $values_2 = [];
                foreach ($data['manga'] as $value_2) {
                    $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value_2 as $key_1 => $value_3) {
                        $values_3[$key_1] = $value_3;
                    }

                    $values_2[] = $values_3;
                }

                $object->setManga($values_2);
                unset($data['manga']);
            }

            if (\array_key_exists('characters', $data)) {
                $values_4 = [];
                foreach ($data['characters'] as $value_4) {
                    $values_5 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value_4 as $key_2 => $value_5) {
                        $values_5[$key_2] = $value_5;
                    }

                    $values_4[] = $values_5;
                }

                $object->setCharacters($values_4);
                unset($data['characters']);
            }

            if (\array_key_exists('people', $data)) {
                $values_6 = [];
                foreach ($data['people'] as $value_6) {
                    $values_6[] = $this->denormalizer->denormalize($value_6, CharacterMeta::class, 'json', $context);
                }

                $object->setPeople($values_6);
                unset($data['people']);
            }

            foreach ($data as $key_3 => $value_7) {
                if (preg_match('/.*/', (string) $key_3)) {
                    $object[$key_3] = $value_7;
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
            if ($object->isInitialized('anime') && null !== $object->getAnime()) {
                $values = [];
                foreach ($object->getAnime() as $value) {
                    $values_1 = [];
                    foreach ($value as $key => $value_1) {
                        $values_1[$key] = $value_1;
                    }

                    $values[] = $values_1;
                }

                $data['anime'] = $values;
            }

            if ($object->isInitialized('manga') && null !== $object->getManga()) {
                $values_2 = [];
                foreach ($object->getManga() as $value_2) {
                    $values_3 = [];
                    foreach ($value_2 as $key_1 => $value_3) {
                        $values_3[$key_1] = $value_3;
                    }

                    $values_2[] = $values_3;
                }

                $data['manga'] = $values_2;
            }

            if ($object->isInitialized('characters') && null !== $object->getCharacters()) {
                $values_4 = [];
                foreach ($object->getCharacters() as $value_4) {
                    $values_5 = [];
                    foreach ($value_4 as $key_2 => $value_5) {
                        $values_5[$key_2] = $value_5;
                    }

                    $values_4[] = $values_5;
                }

                $data['characters'] = $values_4;
            }

            if ($object->isInitialized('people') && null !== $object->getPeople()) {
                $values_6 = [];
                foreach ($object->getPeople() as $value_6) {
                    $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
                }

                $data['people'] = $values_6;
            }

            foreach ($object as $key_3 => $value_7) {
                if (preg_match('/.*/', (string) $key_3)) {
                    $data[$key_3] = $value_7;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [UserFavorites::class => false];
        }
    }
}

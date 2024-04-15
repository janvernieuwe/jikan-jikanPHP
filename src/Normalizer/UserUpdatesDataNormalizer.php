<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jikan\JikanPHP\Model\UserUpdatesData;
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
    class UserUpdatesDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return UserUpdatesData::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof UserUpdatesData;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new UserUpdatesData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('anime', $data)) {
                $values = [];
                foreach ($data['anime'] as $value) {
                    $values_1 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
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
                    $values_3 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value_2 as $key_1 => $value_3) {
                        $values_3[$key_1] = $value_3;
                    }

                    $values_2[] = $values_3;
                }

                $object->setManga($values_2);
                unset($data['manga']);
            }

            foreach ($data as $key_2 => $value_4) {
                if (preg_match('/.*/', (string) $key_2)) {
                    $object[$key_2] = $value_4;
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

            foreach ($object as $key_2 => $value_4) {
                if (preg_match('/.*/', (string) $key_2)) {
                    $data[$key_2] = $value_4;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [UserUpdatesData::class => false];
        }
    }
} else {
    class UserUpdatesDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return UserUpdatesData::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof UserUpdatesData;
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

            $object = new UserUpdatesData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('anime', $data)) {
                $values = [];
                foreach ($data['anime'] as $value) {
                    $values_1 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
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
                    $values_3 = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value_2 as $key_1 => $value_3) {
                        $values_3[$key_1] = $value_3;
                    }

                    $values_2[] = $values_3;
                }

                $object->setManga($values_2);
                unset($data['manga']);
            }

            foreach ($data as $key_2 => $value_4) {
                if (preg_match('/.*/', (string) $key_2)) {
                    $object[$key_2] = $value_4;
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

            foreach ($object as $key_2 => $value_4) {
                if (preg_match('/.*/', (string) $key_2)) {
                    $data[$key_2] = $value_4;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [UserUpdatesData::class => false];
        }
    }
}

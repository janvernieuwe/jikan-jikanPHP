<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jikan\JikanPHP\Model\AnimeVideosDataMusicVideosItem;
use ArrayObject;
use Jikan\JikanPHP\Model\AnimeVideosDataMusicVideosItemMeta;
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
    class AnimeVideosDataMusicVideosItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return AnimeVideosDataMusicVideosItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof AnimeVideosDataMusicVideosItem;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new AnimeVideosDataMusicVideosItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }

            if (\array_key_exists('video', $data)) {
                $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['video'] as $key => $value) {
                    $values[$key] = $value;
                }

                $object->setVideo($values);
                unset($data['video']);
            }

            if (\array_key_exists('meta', $data)) {
                $object->setMeta($this->denormalizer->denormalize($data['meta'], AnimeVideosDataMusicVideosItemMeta::class, 'json', $context));
                unset($data['meta']);
            }

            foreach ($data as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_1;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }

            if ($object->isInitialized('video') && null !== $object->getVideo()) {
                $values = [];
                foreach ($object->getVideo() as $key => $value) {
                    $values[$key] = $value;
                }

                $data['video'] = $values;
            }

            if ($object->isInitialized('meta') && null !== $object->getMeta()) {
                $data['meta'] = $this->normalizer->normalize($object->getMeta(), 'json', $context);
            }

            foreach ($object as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [AnimeVideosDataMusicVideosItem::class => false];
        }
    }
} else {
    class AnimeVideosDataMusicVideosItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return AnimeVideosDataMusicVideosItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof AnimeVideosDataMusicVideosItem;
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

            $object = new AnimeVideosDataMusicVideosItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }

            if (\array_key_exists('video', $data)) {
                $values = new ArrayObject([], ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['video'] as $key => $value) {
                    $values[$key] = $value;
                }

                $object->setVideo($values);
                unset($data['video']);
            }

            if (\array_key_exists('meta', $data)) {
                $object->setMeta($this->denormalizer->denormalize($data['meta'], AnimeVideosDataMusicVideosItemMeta::class, 'json', $context));
                unset($data['meta']);
            }

            foreach ($data as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_1;
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
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }

            if ($object->isInitialized('video') && null !== $object->getVideo()) {
                $values = [];
                foreach ($object->getVideo() as $key => $value) {
                    $values[$key] = $value;
                }

                $data['video'] = $values;
            }

            if ($object->isInitialized('meta') && null !== $object->getMeta()) {
                $data['meta'] = $this->normalizer->normalize($object->getMeta(), 'json', $context);
            }

            foreach ($object as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [AnimeVideosDataMusicVideosItem::class => false];
        }
    }
}

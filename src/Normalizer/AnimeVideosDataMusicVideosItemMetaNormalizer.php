<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\AnimeVideosDataMusicVideosItemMeta;
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
    class AnimeVideosDataMusicVideosItemMetaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return AnimeVideosDataMusicVideosItemMeta::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof AnimeVideosDataMusicVideosItemMeta;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new AnimeVideosDataMusicVideosItemMeta();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('title', $data) && null !== $data['title']) {
                $object->setTitle($data['title']);
                unset($data['title']);
            } elseif (\array_key_exists('title', $data) && null === $data['title']) {
                $object->setTitle(null);
            }

            if (\array_key_exists('author', $data) && null !== $data['author']) {
                $object->setAuthor($data['author']);
                unset($data['author']);
            } elseif (\array_key_exists('author', $data) && null === $data['author']) {
                $object->setAuthor(null);
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
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }

            if ($object->isInitialized('author') && null !== $object->getAuthor()) {
                $data['author'] = $object->getAuthor();
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
            return [AnimeVideosDataMusicVideosItemMeta::class => false];
        }
    }
} else {
    class AnimeVideosDataMusicVideosItemMetaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return AnimeVideosDataMusicVideosItemMeta::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof AnimeVideosDataMusicVideosItemMeta;
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

            $object = new AnimeVideosDataMusicVideosItemMeta();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('title', $data) && null !== $data['title']) {
                $object->setTitle($data['title']);
                unset($data['title']);
            } elseif (\array_key_exists('title', $data) && null === $data['title']) {
                $object->setTitle(null);
            }

            if (\array_key_exists('author', $data) && null !== $data['author']) {
                $object->setAuthor($data['author']);
                unset($data['author']);
            } elseif (\array_key_exists('author', $data) && null === $data['author']) {
                $object->setAuthor(null);
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
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }

            if ($object->isInitialized('author') && null !== $object->getAuthor()) {
                $data['author'] = $object->getAuthor();
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
            return [AnimeVideosDataMusicVideosItemMeta::class => false];
        }
    }
}

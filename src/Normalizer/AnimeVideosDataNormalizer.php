<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jikan\JikanPHP\Model\AnimeVideosData;
use Jikan\JikanPHP\Model\AnimeVideosDataPromoItem;
use Jikan\JikanPHP\Model\AnimeVideosDataEpisodesItem;
use Jikan\JikanPHP\Model\AnimeVideosDataMusicVideosItem;
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
    class AnimeVideosDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return AnimeVideosData::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof AnimeVideosData;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new AnimeVideosData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('promo', $data)) {
                $values = [];
                foreach ($data['promo'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, AnimeVideosDataPromoItem::class, 'json', $context);
                }

                $object->setPromo($values);
                unset($data['promo']);
            }

            if (\array_key_exists('episodes', $data)) {
                $values_1 = [];
                foreach ($data['episodes'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, AnimeVideosDataEpisodesItem::class, 'json', $context);
                }

                $object->setEpisodes($values_1);
                unset($data['episodes']);
            }

            if (\array_key_exists('music_videos', $data)) {
                $values_2 = [];
                foreach ($data['music_videos'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, AnimeVideosDataMusicVideosItem::class, 'json', $context);
                }

                $object->setMusicVideos($values_2);
                unset($data['music_videos']);
            }

            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('promo') && null !== $object->getPromo()) {
                $values = [];
                foreach ($object->getPromo() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['promo'] = $values;
            }

            if ($object->isInitialized('episodes') && null !== $object->getEpisodes()) {
                $values_1 = [];
                foreach ($object->getEpisodes() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }

                $data['episodes'] = $values_1;
            }

            if ($object->isInitialized('musicVideos') && null !== $object->getMusicVideos()) {
                $values_2 = [];
                foreach ($object->getMusicVideos() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }

                $data['music_videos'] = $values_2;
            }

            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [AnimeVideosData::class => false];
        }
    }
} else {
    class AnimeVideosDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return AnimeVideosData::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof AnimeVideosData;
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

            $object = new AnimeVideosData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('promo', $data)) {
                $values = [];
                foreach ($data['promo'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, AnimeVideosDataPromoItem::class, 'json', $context);
                }

                $object->setPromo($values);
                unset($data['promo']);
            }

            if (\array_key_exists('episodes', $data)) {
                $values_1 = [];
                foreach ($data['episodes'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, AnimeVideosDataEpisodesItem::class, 'json', $context);
                }

                $object->setEpisodes($values_1);
                unset($data['episodes']);
            }

            if (\array_key_exists('music_videos', $data)) {
                $values_2 = [];
                foreach ($data['music_videos'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, AnimeVideosDataMusicVideosItem::class, 'json', $context);
                }

                $object->setMusicVideos($values_2);
                unset($data['music_videos']);
            }

            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
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
            if ($object->isInitialized('promo') && null !== $object->getPromo()) {
                $values = [];
                foreach ($object->getPromo() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['promo'] = $values;
            }

            if ($object->isInitialized('episodes') && null !== $object->getEpisodes()) {
                $values_1 = [];
                foreach ($object->getEpisodes() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }

                $data['episodes'] = $values_1;
            }

            if ($object->isInitialized('musicVideos') && null !== $object->getMusicVideos()) {
                $values_2 = [];
                foreach ($object->getMusicVideos() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }

                $data['music_videos'] = $values_2;
            }

            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [AnimeVideosData::class => false];
        }
    }
}

<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\CharacterFull;
use Jikan\JikanPHP\Model\CharacterFullAnimeItem;
use Jikan\JikanPHP\Model\CharacterFullMangaItem;
use Jikan\JikanPHP\Model\CharacterFullVoicesItem;
use Jikan\JikanPHP\Model\CharacterImages;
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
    class CharacterFullNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return CharacterFull::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof CharacterFull;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new CharacterFull();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('mal_id', $data)) {
                $object->setMalId($data['mal_id']);
                unset($data['mal_id']);
            }

            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }

            if (\array_key_exists('images', $data)) {
                $object->setImages($this->denormalizer->denormalize($data['images'], CharacterImages::class, 'json', $context));
                unset($data['images']);
            }

            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }

            if (\array_key_exists('name_kanji', $data) && null !== $data['name_kanji']) {
                $object->setNameKanji($data['name_kanji']);
                unset($data['name_kanji']);
            } elseif (\array_key_exists('name_kanji', $data) && null === $data['name_kanji']) {
                $object->setNameKanji(null);
            }

            if (\array_key_exists('nicknames', $data)) {
                $values = [];
                foreach ($data['nicknames'] as $value) {
                    $values[] = $value;
                }

                $object->setNicknames($values);
                unset($data['nicknames']);
            }

            if (\array_key_exists('favorites', $data)) {
                $object->setFavorites($data['favorites']);
                unset($data['favorites']);
            }

            if (\array_key_exists('about', $data) && null !== $data['about']) {
                $object->setAbout($data['about']);
                unset($data['about']);
            } elseif (\array_key_exists('about', $data) && null === $data['about']) {
                $object->setAbout(null);
            }

            if (\array_key_exists('anime', $data)) {
                $values_1 = [];
                foreach ($data['anime'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, CharacterFullAnimeItem::class, 'json', $context);
                }

                $object->setAnime($values_1);
                unset($data['anime']);
            }

            if (\array_key_exists('manga', $data)) {
                $values_2 = [];
                foreach ($data['manga'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, CharacterFullMangaItem::class, 'json', $context);
                }

                $object->setManga($values_2);
                unset($data['manga']);
            }

            if (\array_key_exists('voices', $data)) {
                $values_3 = [];
                foreach ($data['voices'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, CharacterFullVoicesItem::class, 'json', $context);
                }

                $object->setVoices($values_3);
                unset($data['voices']);
            }

            foreach ($data as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_4;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('malId') && null !== $object->getMalId()) {
                $data['mal_id'] = $object->getMalId();
            }

            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
            }

            if ($object->isInitialized('images') && null !== $object->getImages()) {
                $data['images'] = $this->normalizer->normalize($object->getImages(), 'json', $context);
            }

            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }

            if ($object->isInitialized('nameKanji') && null !== $object->getNameKanji()) {
                $data['name_kanji'] = $object->getNameKanji();
            }

            if ($object->isInitialized('nicknames') && null !== $object->getNicknames()) {
                $values = [];
                foreach ($object->getNicknames() as $value) {
                    $values[] = $value;
                }

                $data['nicknames'] = $values;
            }

            if ($object->isInitialized('favorites') && null !== $object->getFavorites()) {
                $data['favorites'] = $object->getFavorites();
            }

            if ($object->isInitialized('about') && null !== $object->getAbout()) {
                $data['about'] = $object->getAbout();
            }

            if ($object->isInitialized('anime') && null !== $object->getAnime()) {
                $values_1 = [];
                foreach ($object->getAnime() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }

                $data['anime'] = $values_1;
            }

            if ($object->isInitialized('manga') && null !== $object->getManga()) {
                $values_2 = [];
                foreach ($object->getManga() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }

                $data['manga'] = $values_2;
            }

            if ($object->isInitialized('voices') && null !== $object->getVoices()) {
                $values_3 = [];
                foreach ($object->getVoices() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }

                $data['voices'] = $values_3;
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
            return [CharacterFull::class => false];
        }
    }
} else {
    class CharacterFullNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return CharacterFull::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof CharacterFull;
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

            $object = new CharacterFull();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('mal_id', $data)) {
                $object->setMalId($data['mal_id']);
                unset($data['mal_id']);
            }

            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }

            if (\array_key_exists('images', $data)) {
                $object->setImages($this->denormalizer->denormalize($data['images'], CharacterImages::class, 'json', $context));
                unset($data['images']);
            }

            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }

            if (\array_key_exists('name_kanji', $data) && null !== $data['name_kanji']) {
                $object->setNameKanji($data['name_kanji']);
                unset($data['name_kanji']);
            } elseif (\array_key_exists('name_kanji', $data) && null === $data['name_kanji']) {
                $object->setNameKanji(null);
            }

            if (\array_key_exists('nicknames', $data)) {
                $values = [];
                foreach ($data['nicknames'] as $value) {
                    $values[] = $value;
                }

                $object->setNicknames($values);
                unset($data['nicknames']);
            }

            if (\array_key_exists('favorites', $data)) {
                $object->setFavorites($data['favorites']);
                unset($data['favorites']);
            }

            if (\array_key_exists('about', $data) && null !== $data['about']) {
                $object->setAbout($data['about']);
                unset($data['about']);
            } elseif (\array_key_exists('about', $data) && null === $data['about']) {
                $object->setAbout(null);
            }

            if (\array_key_exists('anime', $data)) {
                $values_1 = [];
                foreach ($data['anime'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, CharacterFullAnimeItem::class, 'json', $context);
                }

                $object->setAnime($values_1);
                unset($data['anime']);
            }

            if (\array_key_exists('manga', $data)) {
                $values_2 = [];
                foreach ($data['manga'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, CharacterFullMangaItem::class, 'json', $context);
                }

                $object->setManga($values_2);
                unset($data['manga']);
            }

            if (\array_key_exists('voices', $data)) {
                $values_3 = [];
                foreach ($data['voices'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, CharacterFullVoicesItem::class, 'json', $context);
                }

                $object->setVoices($values_3);
                unset($data['voices']);
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
         */
        public function normalize($object, $format = null, array $context = []): array|\ArrayObject|bool|float|int|string|null
        {
            $data = [];
            if ($object->isInitialized('malId') && null !== $object->getMalId()) {
                $data['mal_id'] = $object->getMalId();
            }

            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
            }

            if ($object->isInitialized('images') && null !== $object->getImages()) {
                $data['images'] = $this->normalizer->normalize($object->getImages(), 'json', $context);
            }

            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }

            if ($object->isInitialized('nameKanji') && null !== $object->getNameKanji()) {
                $data['name_kanji'] = $object->getNameKanji();
            }

            if ($object->isInitialized('nicknames') && null !== $object->getNicknames()) {
                $values = [];
                foreach ($object->getNicknames() as $value) {
                    $values[] = $value;
                }

                $data['nicknames'] = $values;
            }

            if ($object->isInitialized('favorites') && null !== $object->getFavorites()) {
                $data['favorites'] = $object->getFavorites();
            }

            if ($object->isInitialized('about') && null !== $object->getAbout()) {
                $data['about'] = $object->getAbout();
            }

            if ($object->isInitialized('anime') && null !== $object->getAnime()) {
                $values_1 = [];
                foreach ($object->getAnime() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }

                $data['anime'] = $values_1;
            }

            if ($object->isInitialized('manga') && null !== $object->getManga()) {
                $values_2 = [];
                foreach ($object->getManga() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }

                $data['manga'] = $values_2;
            }

            if ($object->isInitialized('voices') && null !== $object->getVoices()) {
                $values_3 = [];
                foreach ($object->getVoices() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }

                $data['voices'] = $values_3;
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
            return [CharacterFull::class => false];
        }
    }
}

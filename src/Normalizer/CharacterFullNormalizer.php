<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\CharacterFull;
use Jikan\JikanPHP\Model\CharacterFullAnimeItem;
use Jikan\JikanPHP\Model\CharacterFullMangaItem;
use Jikan\JikanPHP\Model\CharacterFullVoicesItem;
use Jikan\JikanPHP\Model\CharacterImages;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CharacterFullNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return CharacterFull::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof CharacterFull;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|CharacterFull
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $characterFull = new CharacterFull();
        if (null === $data || !\is_array($data)) {
            return $characterFull;
        }

        if (\array_key_exists('mal_id', $data)) {
            $characterFull->setMalId($data['mal_id']);
        }

        if (\array_key_exists('url', $data)) {
            $characterFull->setUrl($data['url']);
        }

        if (\array_key_exists('images', $data)) {
            $characterFull->setImages($this->denormalizer->denormalize($data['images'], CharacterImages::class, 'json', $context));
        }

        if (\array_key_exists('name', $data)) {
            $characterFull->setName($data['name']);
        }

        if (\array_key_exists('name_kanji', $data) && null !== $data['name_kanji']) {
            $characterFull->setNameKanji($data['name_kanji']);
        } elseif (\array_key_exists('name_kanji', $data) && null === $data['name_kanji']) {
            $characterFull->setNameKanji(null);
        }

        if (\array_key_exists('nicknames', $data)) {
            $values = [];
            foreach ($data['nicknames'] as $value) {
                $values[] = $value;
            }

            $characterFull->setNicknames($values);
        }

        if (\array_key_exists('favorites', $data)) {
            $characterFull->setFavorites($data['favorites']);
        }

        if (\array_key_exists('about', $data) && null !== $data['about']) {
            $characterFull->setAbout($data['about']);
        } elseif (\array_key_exists('about', $data) && null === $data['about']) {
            $characterFull->setAbout(null);
        }

        if (\array_key_exists('anime', $data)) {
            $values_1 = [];
            foreach ($data['anime'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, CharacterFullAnimeItem::class, 'json', $context);
            }

            $characterFull->setAnime($values_1);
        }

        if (\array_key_exists('manga', $data)) {
            $values_2 = [];
            foreach ($data['manga'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, CharacterFullMangaItem::class, 'json', $context);
            }

            $characterFull->setManga($values_2);
        }

        if (\array_key_exists('voices', $data)) {
            $values_3 = [];
            foreach ($data['voices'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, CharacterFullVoicesItem::class, 'json', $context);
            }

            $characterFull->setVoices($values_3);
        }

        return $characterFull;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getMalId()) {
            $data['mal_id'] = $object->getMalId();
        }

        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }

        if (null !== $object->getImages()) {
            $data['images'] = $this->normalizer->normalize($object->getImages(), 'json', $context);
        }

        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }

        if (null !== $object->getNameKanji()) {
            $data['name_kanji'] = $object->getNameKanji();
        }

        if (null !== $object->getNicknames()) {
            $values = [];
            foreach ($object->getNicknames() as $nickname) {
                $values[] = $nickname;
            }

            $data['nicknames'] = $values;
        }

        if (null !== $object->getFavorites()) {
            $data['favorites'] = $object->getFavorites();
        }

        if (null !== $object->getAbout()) {
            $data['about'] = $object->getAbout();
        }

        if (null !== $object->getAnime()) {
            $values_1 = [];
            foreach ($object->getAnime() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }

            $data['anime'] = $values_1;
        }

        if (null !== $object->getManga()) {
            $values_2 = [];
            foreach ($object->getManga() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }

            $data['manga'] = $values_2;
        }

        if (null !== $object->getVoices()) {
            $values_3 = [];
            foreach ($object->getVoices() as $voice) {
                $values_3[] = $this->normalizer->normalize($voice, 'json', $context);
            }

            $data['voices'] = $values_3;
        }

        return $data;
    }
}

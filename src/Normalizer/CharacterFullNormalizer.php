<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
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
        return 'Jikan\\JikanPHP\\Model\\CharacterFull' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && 'Jikan\\JikanPHP\\Model\\CharacterFull' === get_class($data);
    }

    /**
     * @param mixed      $data
     * @param mixed      $class
     * @param null|mixed $format
     *
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jikan\JikanPHP\Model\CharacterFull();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('mal_id', $data)) {
            $object->setMalId($data['mal_id']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('images', $data)) {
            $object->setImages($this->denormalizer->denormalize($data['images'], 'Jikan\\JikanPHP\\Model\\CharacterImages', 'json', $context));
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('name_kanji', $data) && null !== $data['name_kanji']) {
            $object->setNameKanji($data['name_kanji']);
        } elseif (\array_key_exists('name_kanji', $data) && null === $data['name_kanji']) {
            $object->setNameKanji(null);
        }
        if (\array_key_exists('nicknames', $data)) {
            $values = [];
            foreach ($data['nicknames'] as $value) {
                $values[] = $value;
            }
            $object->setNicknames($values);
        }
        if (\array_key_exists('favorites', $data)) {
            $object->setFavorites($data['favorites']);
        }
        if (\array_key_exists('about', $data) && null !== $data['about']) {
            $object->setAbout($data['about']);
        } elseif (\array_key_exists('about', $data) && null === $data['about']) {
            $object->setAbout(null);
        }
        if (\array_key_exists('anime', $data)) {
            $values_1 = [];
            foreach ($data['anime'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Jikan\\JikanPHP\\Model\\CharacterFullAnimeItem', 'json', $context);
            }
            $object->setAnime($values_1);
        }
        if (\array_key_exists('manga', $data)) {
            $values_2 = [];
            foreach ($data['manga'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Jikan\\JikanPHP\\Model\\CharacterFullMangaItem', 'json', $context);
            }
            $object->setManga($values_2);
        }
        if (\array_key_exists('voices', $data)) {
            $values_3 = [];
            foreach ($data['voices'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Jikan\\JikanPHP\\Model\\CharacterFullVoicesItem', 'json', $context);
            }
            $object->setVoices($values_3);
        }

        return $object;
    }

    /**
     * @param mixed      $object
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
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
            foreach ($object->getNicknames() as $value) {
                $values[] = $value;
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
            foreach ($object->getVoices() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['voices'] = $values_3;
        }

        return $data;
    }
}

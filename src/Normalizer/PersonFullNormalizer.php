<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\PeopleImages;
use Jikan\JikanPHP\Model\PersonFull;
use Jikan\JikanPHP\Model\PersonFullAnimeItem;
use Jikan\JikanPHP\Model\PersonFullMangaItem;
use Jikan\JikanPHP\Model\PersonFullVoicesItem;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PersonFullNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return PersonFull::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof PersonFull;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|PersonFull
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $personFull = new PersonFull();
        if (null === $data || !\is_array($data)) {
            return $personFull;
        }

        if (\array_key_exists('mal_id', $data)) {
            $personFull->setMalId($data['mal_id']);
        }

        if (\array_key_exists('url', $data)) {
            $personFull->setUrl($data['url']);
        }

        if (\array_key_exists('website_url', $data) && null !== $data['website_url']) {
            $personFull->setWebsiteUrl($data['website_url']);
        } elseif (\array_key_exists('website_url', $data) && null === $data['website_url']) {
            $personFull->setWebsiteUrl(null);
        }

        if (\array_key_exists('images', $data)) {
            $personFull->setImages($this->denormalizer->denormalize($data['images'], PeopleImages::class, 'json', $context));
        }

        if (\array_key_exists('name', $data)) {
            $personFull->setName($data['name']);
        }

        if (\array_key_exists('given_name', $data) && null !== $data['given_name']) {
            $personFull->setGivenName($data['given_name']);
        } elseif (\array_key_exists('given_name', $data) && null === $data['given_name']) {
            $personFull->setGivenName(null);
        }

        if (\array_key_exists('family_name', $data) && null !== $data['family_name']) {
            $personFull->setFamilyName($data['family_name']);
        } elseif (\array_key_exists('family_name', $data) && null === $data['family_name']) {
            $personFull->setFamilyName(null);
        }

        if (\array_key_exists('alternate_names', $data)) {
            $values = [];
            foreach ($data['alternate_names'] as $value) {
                $values[] = $value;
            }

            $personFull->setAlternateNames($values);
        }

        if (\array_key_exists('birthday', $data) && null !== $data['birthday']) {
            $personFull->setBirthday($data['birthday']);
        } elseif (\array_key_exists('birthday', $data) && null === $data['birthday']) {
            $personFull->setBirthday(null);
        }

        if (\array_key_exists('favorites', $data)) {
            $personFull->setFavorites($data['favorites']);
        }

        if (\array_key_exists('about', $data) && null !== $data['about']) {
            $personFull->setAbout($data['about']);
        } elseif (\array_key_exists('about', $data) && null === $data['about']) {
            $personFull->setAbout(null);
        }

        if (\array_key_exists('anime', $data)) {
            $values_1 = [];
            foreach ($data['anime'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, PersonFullAnimeItem::class, 'json', $context);
            }

            $personFull->setAnime($values_1);
        }

        if (\array_key_exists('manga', $data)) {
            $values_2 = [];
            foreach ($data['manga'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, PersonFullMangaItem::class, 'json', $context);
            }

            $personFull->setManga($values_2);
        }

        if (\array_key_exists('voices', $data)) {
            $values_3 = [];
            foreach ($data['voices'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, PersonFullVoicesItem::class, 'json', $context);
            }

            $personFull->setVoices($values_3);
        }

        return $personFull;
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

        if (null !== $object->getWebsiteUrl()) {
            $data['website_url'] = $object->getWebsiteUrl();
        }

        if (null !== $object->getImages()) {
            $data['images'] = $this->normalizer->normalize($object->getImages(), 'json', $context);
        }

        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }

        if (null !== $object->getGivenName()) {
            $data['given_name'] = $object->getGivenName();
        }

        if (null !== $object->getFamilyName()) {
            $data['family_name'] = $object->getFamilyName();
        }

        if (null !== $object->getAlternateNames()) {
            $values = [];
            foreach ($object->getAlternateNames() as $alternateName) {
                $values[] = $alternateName;
            }

            $data['alternate_names'] = $values;
        }

        if (null !== $object->getBirthday()) {
            $data['birthday'] = $object->getBirthday();
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

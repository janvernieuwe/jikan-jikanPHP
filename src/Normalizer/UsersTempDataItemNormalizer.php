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

class UsersTempDataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Jikan\\JikanPHP\\Model\\UsersTempDataItem' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && 'Jikan\\JikanPHP\\Model\\UsersTempDataItem' === get_class($data);
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
        $object = new \Jikan\JikanPHP\Model\UsersTempDataItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('mal_id', $data)) {
            $object->setMalId($data['mal_id']);
        }
        if (\array_key_exists('username', $data)) {
            $object->setUsername($data['username']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('images', $data)) {
            $object->setImages($this->denormalizer->denormalize($data['images'], 'Jikan\\JikanPHP\\Model\\UsersTempDataItemImages', 'json', $context));
        }
        if (\array_key_exists('last_online', $data)) {
            $object->setLastOnline($data['last_online']);
        }
        if (\array_key_exists('gender', $data)) {
            $object->setGender($data['gender']);
        }
        if (\array_key_exists('birthday', $data)) {
            $object->setBirthday($data['birthday']);
        }
        if (\array_key_exists('location', $data)) {
            $object->setLocation($data['location']);
        }
        if (\array_key_exists('joined', $data)) {
            $object->setJoined($data['joined']);
        }
        if (\array_key_exists('anime_stats', $data)) {
            $object->setAnimeStats($this->denormalizer->denormalize($data['anime_stats'], 'Jikan\\JikanPHP\\Model\\UsersTempDataItemAnimeStats', 'json', $context));
        }
        if (\array_key_exists('manga_stats', $data)) {
            $object->setMangaStats($this->denormalizer->denormalize($data['manga_stats'], 'Jikan\\JikanPHP\\Model\\UsersTempDataItemMangaStats', 'json', $context));
        }
        if (\array_key_exists('favorites', $data)) {
            $object->setFavorites($this->denormalizer->denormalize($data['favorites'], 'Jikan\\JikanPHP\\Model\\UsersTempDataItemFavorites', 'json', $context));
        }
        if (\array_key_exists('about', $data)) {
            $object->setAbout($data['about']);
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
        if (null !== $object->getUsername()) {
            $data['username'] = $object->getUsername();
        }
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if (null !== $object->getImages()) {
            $data['images'] = $this->normalizer->normalize($object->getImages(), 'json', $context);
        }
        if (null !== $object->getLastOnline()) {
            $data['last_online'] = $object->getLastOnline();
        }
        if (null !== $object->getGender()) {
            $data['gender'] = $object->getGender();
        }
        if (null !== $object->getBirthday()) {
            $data['birthday'] = $object->getBirthday();
        }
        if (null !== $object->getLocation()) {
            $data['location'] = $object->getLocation();
        }
        if (null !== $object->getJoined()) {
            $data['joined'] = $object->getJoined();
        }
        if (null !== $object->getAnimeStats()) {
            $data['anime_stats'] = $this->normalizer->normalize($object->getAnimeStats(), 'json', $context);
        }
        if (null !== $object->getMangaStats()) {
            $data['manga_stats'] = $this->normalizer->normalize($object->getMangaStats(), 'json', $context);
        }
        if (null !== $object->getFavorites()) {
            $data['favorites'] = $this->normalizer->normalize($object->getFavorites(), 'json', $context);
        }
        if (null !== $object->getAbout()) {
            $data['about'] = $object->getAbout();
        }

        return $data;
    }
}

<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\UsersTempDataItem;
use Jikan\JikanPHP\Model\UsersTempDataItemAnimeStats;
use Jikan\JikanPHP\Model\UsersTempDataItemFavorites;
use Jikan\JikanPHP\Model\UsersTempDataItemImages;
use Jikan\JikanPHP\Model\UsersTempDataItemMangaStats;
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
        return UsersTempDataItem::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof UsersTempDataItem;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|UsersTempDataItem
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $usersTempDataItem = new UsersTempDataItem();
        if (null === $data || !\is_array($data)) {
            return $usersTempDataItem;
        }

        if (\array_key_exists('mal_id', $data)) {
            $usersTempDataItem->setMalId($data['mal_id']);
        }

        if (\array_key_exists('username', $data)) {
            $usersTempDataItem->setUsername($data['username']);
        }

        if (\array_key_exists('url', $data)) {
            $usersTempDataItem->setUrl($data['url']);
        }

        if (\array_key_exists('images', $data)) {
            $usersTempDataItem->setImages($this->denormalizer->denormalize($data['images'], UsersTempDataItemImages::class, 'json', $context));
        }

        if (\array_key_exists('last_online', $data)) {
            $usersTempDataItem->setLastOnline($data['last_online']);
        }

        if (\array_key_exists('gender', $data)) {
            $usersTempDataItem->setGender($data['gender']);
        }

        if (\array_key_exists('birthday', $data)) {
            $usersTempDataItem->setBirthday($data['birthday']);
        }

        if (\array_key_exists('location', $data)) {
            $usersTempDataItem->setLocation($data['location']);
        }

        if (\array_key_exists('joined', $data)) {
            $usersTempDataItem->setJoined($data['joined']);
        }

        if (\array_key_exists('anime_stats', $data)) {
            $usersTempDataItem->setAnimeStats($this->denormalizer->denormalize($data['anime_stats'], UsersTempDataItemAnimeStats::class, 'json', $context));
        }

        if (\array_key_exists('manga_stats', $data)) {
            $usersTempDataItem->setMangaStats($this->denormalizer->denormalize($data['manga_stats'], UsersTempDataItemMangaStats::class, 'json', $context));
        }

        if (\array_key_exists('favorites', $data)) {
            $usersTempDataItem->setFavorites($this->denormalizer->denormalize($data['favorites'], UsersTempDataItemFavorites::class, 'json', $context));
        }

        if (\array_key_exists('about', $data)) {
            $usersTempDataItem->setAbout($data['about']);
        }

        return $usersTempDataItem;
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

<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\CharacterImages;
use Jikan\JikanPHP\Model\UserFavoritesCharactersItem;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class UserFavoritesCharactersItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return UserFavoritesCharactersItem::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof UserFavoritesCharactersItem;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|UserFavoritesCharactersItem
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $userFavoritesCharactersItem = new UserFavoritesCharactersItem();
        if (null === $data || !\is_array($data)) {
            return $userFavoritesCharactersItem;
        }

        if (\array_key_exists('mal_id', $data)) {
            $userFavoritesCharactersItem->setMalId($data['mal_id']);
        }

        if (\array_key_exists('url', $data)) {
            $userFavoritesCharactersItem->setUrl($data['url']);
        }

        if (\array_key_exists('images', $data)) {
            $userFavoritesCharactersItem->setImages($this->denormalizer->denormalize($data['images'], CharacterImages::class, 'json', $context));
        }

        if (\array_key_exists('name', $data)) {
            $userFavoritesCharactersItem->setName($data['name']);
        }

        if (\array_key_exists('type', $data)) {
            $userFavoritesCharactersItem->setType($data['type']);
        }

        if (\array_key_exists('title', $data)) {
            $userFavoritesCharactersItem->setTitle($data['title']);
        }

        return $userFavoritesCharactersItem;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
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

        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }

        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }

        return $data;
    }
}

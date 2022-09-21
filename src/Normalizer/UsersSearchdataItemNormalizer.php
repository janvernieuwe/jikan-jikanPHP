<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\UserImages;
use Jikan\JikanPHP\Model\UsersSearchdataItem;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class UsersSearchdataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return UsersSearchdataItem::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof UsersSearchdataItem;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|UsersSearchdataItem
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $usersSearchdataItem = new UsersSearchdataItem();
        if (null === $data || !\is_array($data)) {
            return $usersSearchdataItem;
        }

        if (\array_key_exists('url', $data)) {
            $usersSearchdataItem->setUrl($data['url']);
        }

        if (\array_key_exists('username', $data)) {
            $usersSearchdataItem->setUsername($data['username']);
        }

        if (\array_key_exists('images', $data)) {
            $usersSearchdataItem->setImages($this->denormalizer->denormalize($data['images'], UserImages::class, 'json', $context));
        }

        if (\array_key_exists('last_online', $data)) {
            $usersSearchdataItem->setLastOnline($data['last_online']);
        }

        return $usersSearchdataItem;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }

        if (null !== $object->getUsername()) {
            $data['username'] = $object->getUsername();
        }

        if (null !== $object->getImages()) {
            $data['images'] = $this->normalizer->normalize($object->getImages(), 'json', $context);
        }

        if (null !== $object->getLastOnline()) {
            $data['last_online'] = $object->getLastOnline();
        }

        return $data;
    }
}

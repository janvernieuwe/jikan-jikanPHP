<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\UserFriendsdataItem;
use Jikan\JikanPHP\Model\UserMeta;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class UserFriendsdataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return UserFriendsdataItem::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof UserFriendsdataItem;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|UserFriendsdataItem
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $userFriendsdataItem = new UserFriendsdataItem();
        if (null === $data || !\is_array($data)) {
            return $userFriendsdataItem;
        }

        if (\array_key_exists('user', $data)) {
            $userFriendsdataItem->setUser($this->denormalizer->denormalize($data['user'], UserMeta::class, 'json', $context));
        }

        if (\array_key_exists('last_online', $data)) {
            $userFriendsdataItem->setLastOnline($data['last_online']);
        }

        if (\array_key_exists('friends_since', $data)) {
            $userFriendsdataItem->setFriendsSince($data['friends_since']);
        }

        return $userFriendsdataItem;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getUser()) {
            $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
        }

        if (null !== $object->getLastOnline()) {
            $data['last_online'] = $object->getLastOnline();
        }

        if (null !== $object->getFriendsSince()) {
            $data['friends_since'] = $object->getFriendsSince();
        }

        return $data;
    }
}

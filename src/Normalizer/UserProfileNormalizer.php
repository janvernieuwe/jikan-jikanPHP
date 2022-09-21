<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\UserImages;
use Jikan\JikanPHP\Model\UserProfile;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class UserProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return UserProfile::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof UserProfile;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|UserProfile
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $userProfile = new UserProfile();
        if (null === $data || !\is_array($data)) {
            return $userProfile;
        }

        if (\array_key_exists('mal_id', $data) && null !== $data['mal_id']) {
            $userProfile->setMalId($data['mal_id']);
        } elseif (\array_key_exists('mal_id', $data) && null === $data['mal_id']) {
            $userProfile->setMalId(null);
        }

        if (\array_key_exists('username', $data)) {
            $userProfile->setUsername($data['username']);
        }

        if (\array_key_exists('url', $data)) {
            $userProfile->setUrl($data['url']);
        }

        if (\array_key_exists('images', $data)) {
            $userProfile->setImages($this->denormalizer->denormalize($data['images'], UserImages::class, 'json', $context));
        }

        if (\array_key_exists('last_online', $data) && null !== $data['last_online']) {
            $userProfile->setLastOnline($data['last_online']);
        } elseif (\array_key_exists('last_online', $data) && null === $data['last_online']) {
            $userProfile->setLastOnline(null);
        }

        if (\array_key_exists('gender', $data) && null !== $data['gender']) {
            $userProfile->setGender($data['gender']);
        } elseif (\array_key_exists('gender', $data) && null === $data['gender']) {
            $userProfile->setGender(null);
        }

        if (\array_key_exists('birthday', $data) && null !== $data['birthday']) {
            $userProfile->setBirthday($data['birthday']);
        } elseif (\array_key_exists('birthday', $data) && null === $data['birthday']) {
            $userProfile->setBirthday(null);
        }

        if (\array_key_exists('location', $data) && null !== $data['location']) {
            $userProfile->setLocation($data['location']);
        } elseif (\array_key_exists('location', $data) && null === $data['location']) {
            $userProfile->setLocation(null);
        }

        if (\array_key_exists('joined', $data) && null !== $data['joined']) {
            $userProfile->setJoined($data['joined']);
        } elseif (\array_key_exists('joined', $data) && null === $data['joined']) {
            $userProfile->setJoined(null);
        }

        return $userProfile;
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

        return $data;
    }
}

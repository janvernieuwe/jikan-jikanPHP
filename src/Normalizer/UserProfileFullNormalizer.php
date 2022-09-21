<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\UserImages;
use Jikan\JikanPHP\Model\UserProfileFull;
use Jikan\JikanPHP\Model\UserProfileFullExternalItem;
use Jikan\JikanPHP\Model\UserProfileFullStatistics;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class UserProfileFullNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return UserProfileFull::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof UserProfileFull;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|UserProfileFull
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $userProfileFull = new UserProfileFull();
        if (null === $data || !\is_array($data)) {
            return $userProfileFull;
        }

        if (\array_key_exists('mal_id', $data) && null !== $data['mal_id']) {
            $userProfileFull->setMalId($data['mal_id']);
        } elseif (\array_key_exists('mal_id', $data) && null === $data['mal_id']) {
            $userProfileFull->setMalId(null);
        }

        if (\array_key_exists('username', $data)) {
            $userProfileFull->setUsername($data['username']);
        }

        if (\array_key_exists('url', $data)) {
            $userProfileFull->setUrl($data['url']);
        }

        if (\array_key_exists('images', $data)) {
            $userProfileFull->setImages($this->denormalizer->denormalize($data['images'], UserImages::class, 'json', $context));
        }

        if (\array_key_exists('last_online', $data) && null !== $data['last_online']) {
            $userProfileFull->setLastOnline($data['last_online']);
        } elseif (\array_key_exists('last_online', $data) && null === $data['last_online']) {
            $userProfileFull->setLastOnline(null);
        }

        if (\array_key_exists('gender', $data) && null !== $data['gender']) {
            $userProfileFull->setGender($data['gender']);
        } elseif (\array_key_exists('gender', $data) && null === $data['gender']) {
            $userProfileFull->setGender(null);
        }

        if (\array_key_exists('birthday', $data) && null !== $data['birthday']) {
            $userProfileFull->setBirthday($data['birthday']);
        } elseif (\array_key_exists('birthday', $data) && null === $data['birthday']) {
            $userProfileFull->setBirthday(null);
        }

        if (\array_key_exists('location', $data) && null !== $data['location']) {
            $userProfileFull->setLocation($data['location']);
        } elseif (\array_key_exists('location', $data) && null === $data['location']) {
            $userProfileFull->setLocation(null);
        }

        if (\array_key_exists('joined', $data) && null !== $data['joined']) {
            $userProfileFull->setJoined($data['joined']);
        } elseif (\array_key_exists('joined', $data) && null === $data['joined']) {
            $userProfileFull->setJoined(null);
        }

        if (\array_key_exists('statistics', $data)) {
            $userProfileFull->setStatistics($this->denormalizer->denormalize($data['statistics'], UserProfileFullStatistics::class, 'json', $context));
        }

        if (\array_key_exists('external', $data)) {
            $values = [];
            foreach ($data['external'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, UserProfileFullExternalItem::class, 'json', $context);
            }

            $userProfileFull->setExternal($values);
        }

        return $userProfileFull;
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

        if (null !== $object->getStatistics()) {
            $data['statistics'] = $this->normalizer->normalize($object->getStatistics(), 'json', $context);
        }

        if (null !== $object->getExternal()) {
            $values = [];
            foreach ($object->getExternal() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }

            $data['external'] = $values;
        }

        return $data;
    }
}

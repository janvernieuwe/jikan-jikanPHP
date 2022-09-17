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

class UserProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Jikan\\JikanPHP\\Model\\UserProfile' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && 'Jikan\\JikanPHP\\Model\\UserProfile' === get_class($data);
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
        $object = new \Jikan\JikanPHP\Model\UserProfile();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('mal_id', $data) && null !== $data['mal_id']) {
            $object->setMalId($data['mal_id']);
        } elseif (\array_key_exists('mal_id', $data) && null === $data['mal_id']) {
            $object->setMalId(null);
        }
        if (\array_key_exists('username', $data)) {
            $object->setUsername($data['username']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('images', $data)) {
            $object->setImages($this->denormalizer->denormalize($data['images'], 'Jikan\\JikanPHP\\Model\\UserImages', 'json', $context));
        }
        if (\array_key_exists('last_online', $data) && null !== $data['last_online']) {
            $object->setLastOnline($data['last_online']);
        } elseif (\array_key_exists('last_online', $data) && null === $data['last_online']) {
            $object->setLastOnline(null);
        }
        if (\array_key_exists('gender', $data) && null !== $data['gender']) {
            $object->setGender($data['gender']);
        } elseif (\array_key_exists('gender', $data) && null === $data['gender']) {
            $object->setGender(null);
        }
        if (\array_key_exists('birthday', $data) && null !== $data['birthday']) {
            $object->setBirthday($data['birthday']);
        } elseif (\array_key_exists('birthday', $data) && null === $data['birthday']) {
            $object->setBirthday(null);
        }
        if (\array_key_exists('location', $data) && null !== $data['location']) {
            $object->setLocation($data['location']);
        } elseif (\array_key_exists('location', $data) && null === $data['location']) {
            $object->setLocation(null);
        }
        if (\array_key_exists('joined', $data) && null !== $data['joined']) {
            $object->setJoined($data['joined']);
        } elseif (\array_key_exists('joined', $data) && null === $data['joined']) {
            $object->setJoined(null);
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

        return $data;
    }
}

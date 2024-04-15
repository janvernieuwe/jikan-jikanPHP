<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\UserImages;
use Jikan\JikanPHP\Model\UserProfile;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Jikan\JikanPHP\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) || (Kernel::MAJOR_VERSION >= 7 || Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4)) {
    class UserProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return UserProfile::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof UserProfile;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new UserProfile();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('mal_id', $data) && null !== $data['mal_id']) {
                $object->setMalId($data['mal_id']);
                unset($data['mal_id']);
            } elseif (\array_key_exists('mal_id', $data) && null === $data['mal_id']) {
                $object->setMalId(null);
            }

            if (\array_key_exists('username', $data)) {
                $object->setUsername($data['username']);
                unset($data['username']);
            }

            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }

            if (\array_key_exists('images', $data)) {
                $object->setImages($this->denormalizer->denormalize($data['images'], UserImages::class, 'json', $context));
                unset($data['images']);
            }

            if (\array_key_exists('last_online', $data) && null !== $data['last_online']) {
                $object->setLastOnline($data['last_online']);
                unset($data['last_online']);
            } elseif (\array_key_exists('last_online', $data) && null === $data['last_online']) {
                $object->setLastOnline(null);
            }

            if (\array_key_exists('gender', $data) && null !== $data['gender']) {
                $object->setGender($data['gender']);
                unset($data['gender']);
            } elseif (\array_key_exists('gender', $data) && null === $data['gender']) {
                $object->setGender(null);
            }

            if (\array_key_exists('birthday', $data) && null !== $data['birthday']) {
                $object->setBirthday($data['birthday']);
                unset($data['birthday']);
            } elseif (\array_key_exists('birthday', $data) && null === $data['birthday']) {
                $object->setBirthday(null);
            }

            if (\array_key_exists('location', $data) && null !== $data['location']) {
                $object->setLocation($data['location']);
                unset($data['location']);
            } elseif (\array_key_exists('location', $data) && null === $data['location']) {
                $object->setLocation(null);
            }

            if (\array_key_exists('joined', $data) && null !== $data['joined']) {
                $object->setJoined($data['joined']);
                unset($data['joined']);
            } elseif (\array_key_exists('joined', $data) && null === $data['joined']) {
                $object->setJoined(null);
            }

            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('malId') && null !== $object->getMalId()) {
                $data['mal_id'] = $object->getMalId();
            }

            if ($object->isInitialized('username') && null !== $object->getUsername()) {
                $data['username'] = $object->getUsername();
            }

            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
            }

            if ($object->isInitialized('images') && null !== $object->getImages()) {
                $data['images'] = $this->normalizer->normalize($object->getImages(), 'json', $context);
            }

            if ($object->isInitialized('lastOnline') && null !== $object->getLastOnline()) {
                $data['last_online'] = $object->getLastOnline();
            }

            if ($object->isInitialized('gender') && null !== $object->getGender()) {
                $data['gender'] = $object->getGender();
            }

            if ($object->isInitialized('birthday') && null !== $object->getBirthday()) {
                $data['birthday'] = $object->getBirthday();
            }

            if ($object->isInitialized('location') && null !== $object->getLocation()) {
                $data['location'] = $object->getLocation();
            }

            if ($object->isInitialized('joined') && null !== $object->getJoined()) {
                $data['joined'] = $object->getJoined();
            }

            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [UserProfile::class => false];
        }
    }
} else {
    class UserProfileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return UserProfile::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof UserProfile;
        }

        /**
         * @param null|mixed $format
         */
        public function denormalize($data, $type, $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new UserProfile();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('mal_id', $data) && null !== $data['mal_id']) {
                $object->setMalId($data['mal_id']);
                unset($data['mal_id']);
            } elseif (\array_key_exists('mal_id', $data) && null === $data['mal_id']) {
                $object->setMalId(null);
            }

            if (\array_key_exists('username', $data)) {
                $object->setUsername($data['username']);
                unset($data['username']);
            }

            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }

            if (\array_key_exists('images', $data)) {
                $object->setImages($this->denormalizer->denormalize($data['images'], UserImages::class, 'json', $context));
                unset($data['images']);
            }

            if (\array_key_exists('last_online', $data) && null !== $data['last_online']) {
                $object->setLastOnline($data['last_online']);
                unset($data['last_online']);
            } elseif (\array_key_exists('last_online', $data) && null === $data['last_online']) {
                $object->setLastOnline(null);
            }

            if (\array_key_exists('gender', $data) && null !== $data['gender']) {
                $object->setGender($data['gender']);
                unset($data['gender']);
            } elseif (\array_key_exists('gender', $data) && null === $data['gender']) {
                $object->setGender(null);
            }

            if (\array_key_exists('birthday', $data) && null !== $data['birthday']) {
                $object->setBirthday($data['birthday']);
                unset($data['birthday']);
            } elseif (\array_key_exists('birthday', $data) && null === $data['birthday']) {
                $object->setBirthday(null);
            }

            if (\array_key_exists('location', $data) && null !== $data['location']) {
                $object->setLocation($data['location']);
                unset($data['location']);
            } elseif (\array_key_exists('location', $data) && null === $data['location']) {
                $object->setLocation(null);
            }

            if (\array_key_exists('joined', $data) && null !== $data['joined']) {
                $object->setJoined($data['joined']);
                unset($data['joined']);
            } elseif (\array_key_exists('joined', $data) && null === $data['joined']) {
                $object->setJoined(null);
            }

            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        /**
         * @param null|mixed $format
         */
        public function normalize($object, $format = null, array $context = []): array|\ArrayObject|bool|float|int|string|null
        {
            $data = [];
            if ($object->isInitialized('malId') && null !== $object->getMalId()) {
                $data['mal_id'] = $object->getMalId();
            }

            if ($object->isInitialized('username') && null !== $object->getUsername()) {
                $data['username'] = $object->getUsername();
            }

            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
            }

            if ($object->isInitialized('images') && null !== $object->getImages()) {
                $data['images'] = $this->normalizer->normalize($object->getImages(), 'json', $context);
            }

            if ($object->isInitialized('lastOnline') && null !== $object->getLastOnline()) {
                $data['last_online'] = $object->getLastOnline();
            }

            if ($object->isInitialized('gender') && null !== $object->getGender()) {
                $data['gender'] = $object->getGender();
            }

            if ($object->isInitialized('birthday') && null !== $object->getBirthday()) {
                $data['birthday'] = $object->getBirthday();
            }

            if ($object->isInitialized('location') && null !== $object->getLocation()) {
                $data['location'] = $object->getLocation();
            }

            if ($object->isInitialized('joined') && null !== $object->getJoined()) {
                $data['joined'] = $object->getJoined();
            }

            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [UserProfile::class => false];
        }
    }
}

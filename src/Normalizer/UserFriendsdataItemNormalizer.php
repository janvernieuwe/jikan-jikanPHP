<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\UserFriendsdataItem;
use Jikan\JikanPHP\Model\UserMeta;
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
    class UserFriendsdataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return UserFriendsdataItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof UserFriendsdataItem;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new UserFriendsdataItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('user', $data)) {
                $object->setUser($this->denormalizer->denormalize($data['user'], UserMeta::class, 'json', $context));
                unset($data['user']);
            }

            if (\array_key_exists('last_online', $data)) {
                $object->setLastOnline($data['last_online']);
                unset($data['last_online']);
            }

            if (\array_key_exists('friends_since', $data)) {
                $object->setFriendsSince($data['friends_since']);
                unset($data['friends_since']);
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
            if ($object->isInitialized('user') && null !== $object->getUser()) {
                $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
            }

            if ($object->isInitialized('lastOnline') && null !== $object->getLastOnline()) {
                $data['last_online'] = $object->getLastOnline();
            }

            if ($object->isInitialized('friendsSince') && null !== $object->getFriendsSince()) {
                $data['friends_since'] = $object->getFriendsSince();
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
            return [UserFriendsdataItem::class => false];
        }
    }
} else {
    class UserFriendsdataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return UserFriendsdataItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof UserFriendsdataItem;
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

            $object = new UserFriendsdataItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('user', $data)) {
                $object->setUser($this->denormalizer->denormalize($data['user'], UserMeta::class, 'json', $context));
                unset($data['user']);
            }

            if (\array_key_exists('last_online', $data)) {
                $object->setLastOnline($data['last_online']);
                unset($data['last_online']);
            }

            if (\array_key_exists('friends_since', $data)) {
                $object->setFriendsSince($data['friends_since']);
                unset($data['friends_since']);
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
            if ($object->isInitialized('user') && null !== $object->getUser()) {
                $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
            }

            if ($object->isInitialized('lastOnline') && null !== $object->getLastOnline()) {
                $data['last_online'] = $object->getLastOnline();
            }

            if ($object->isInitialized('friendsSince') && null !== $object->getFriendsSince()) {
                $data['friends_since'] = $object->getFriendsSince();
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
            return [UserFriendsdataItem::class => false];
        }
    }
}

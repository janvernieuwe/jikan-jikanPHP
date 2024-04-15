<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jikan\JikanPHP\Model\UserUpdatesDataMangaItem;
use Jikan\JikanPHP\Model\MangaMeta;
use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
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
    class UserUpdatesDataMangaItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return UserUpdatesDataMangaItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof UserUpdatesDataMangaItem;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new UserUpdatesDataMangaItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('entry', $data)) {
                $object->setEntry($this->denormalizer->denormalize($data['entry'], MangaMeta::class, 'json', $context));
                unset($data['entry']);
            }

            if (\array_key_exists('score', $data) && null !== $data['score']) {
                $object->setScore($data['score']);
                unset($data['score']);
            } elseif (\array_key_exists('score', $data) && null === $data['score']) {
                $object->setScore(null);
            }

            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }

            if (\array_key_exists('chapters_read', $data) && null !== $data['chapters_read']) {
                $object->setChaptersRead($data['chapters_read']);
                unset($data['chapters_read']);
            } elseif (\array_key_exists('chapters_read', $data) && null === $data['chapters_read']) {
                $object->setChaptersRead(null);
            }

            if (\array_key_exists('chapters_total', $data) && null !== $data['chapters_total']) {
                $object->setChaptersTotal($data['chapters_total']);
                unset($data['chapters_total']);
            } elseif (\array_key_exists('chapters_total', $data) && null === $data['chapters_total']) {
                $object->setChaptersTotal(null);
            }

            if (\array_key_exists('volumes_read', $data) && null !== $data['volumes_read']) {
                $object->setVolumesRead($data['volumes_read']);
                unset($data['volumes_read']);
            } elseif (\array_key_exists('volumes_read', $data) && null === $data['volumes_read']) {
                $object->setVolumesRead(null);
            }

            if (\array_key_exists('volumes_total', $data) && null !== $data['volumes_total']) {
                $object->setVolumesTotal($data['volumes_total']);
                unset($data['volumes_total']);
            } elseif (\array_key_exists('volumes_total', $data) && null === $data['volumes_total']) {
                $object->setVolumesTotal(null);
            }

            if (\array_key_exists('date', $data)) {
                $object->setDate($data['date']);
                unset($data['date']);
            }

            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('entry') && null !== $object->getEntry()) {
                $data['entry'] = $this->normalizer->normalize($object->getEntry(), 'json', $context);
            }

            if ($object->isInitialized('score') && null !== $object->getScore()) {
                $data['score'] = $object->getScore();
            }

            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }

            if ($object->isInitialized('chaptersRead') && null !== $object->getChaptersRead()) {
                $data['chapters_read'] = $object->getChaptersRead();
            }

            if ($object->isInitialized('chaptersTotal') && null !== $object->getChaptersTotal()) {
                $data['chapters_total'] = $object->getChaptersTotal();
            }

            if ($object->isInitialized('volumesRead') && null !== $object->getVolumesRead()) {
                $data['volumes_read'] = $object->getVolumesRead();
            }

            if ($object->isInitialized('volumesTotal') && null !== $object->getVolumesTotal()) {
                $data['volumes_total'] = $object->getVolumesTotal();
            }

            if ($object->isInitialized('date') && null !== $object->getDate()) {
                $data['date'] = $object->getDate();
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
            return [UserUpdatesDataMangaItem::class => false];
        }
    }
} else {
    class UserUpdatesDataMangaItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return UserUpdatesDataMangaItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof UserUpdatesDataMangaItem;
        }

        /**
         * @param null|mixed $format
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new UserUpdatesDataMangaItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('entry', $data)) {
                $object->setEntry($this->denormalizer->denormalize($data['entry'], MangaMeta::class, 'json', $context));
                unset($data['entry']);
            }

            if (\array_key_exists('score', $data) && null !== $data['score']) {
                $object->setScore($data['score']);
                unset($data['score']);
            } elseif (\array_key_exists('score', $data) && null === $data['score']) {
                $object->setScore(null);
            }

            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }

            if (\array_key_exists('chapters_read', $data) && null !== $data['chapters_read']) {
                $object->setChaptersRead($data['chapters_read']);
                unset($data['chapters_read']);
            } elseif (\array_key_exists('chapters_read', $data) && null === $data['chapters_read']) {
                $object->setChaptersRead(null);
            }

            if (\array_key_exists('chapters_total', $data) && null !== $data['chapters_total']) {
                $object->setChaptersTotal($data['chapters_total']);
                unset($data['chapters_total']);
            } elseif (\array_key_exists('chapters_total', $data) && null === $data['chapters_total']) {
                $object->setChaptersTotal(null);
            }

            if (\array_key_exists('volumes_read', $data) && null !== $data['volumes_read']) {
                $object->setVolumesRead($data['volumes_read']);
                unset($data['volumes_read']);
            } elseif (\array_key_exists('volumes_read', $data) && null === $data['volumes_read']) {
                $object->setVolumesRead(null);
            }

            if (\array_key_exists('volumes_total', $data) && null !== $data['volumes_total']) {
                $object->setVolumesTotal($data['volumes_total']);
                unset($data['volumes_total']);
            } elseif (\array_key_exists('volumes_total', $data) && null === $data['volumes_total']) {
                $object->setVolumesTotal(null);
            }

            if (\array_key_exists('date', $data)) {
                $object->setDate($data['date']);
                unset($data['date']);
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
         *
         * @return array|string|int|float|bool|ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('entry') && null !== $object->getEntry()) {
                $data['entry'] = $this->normalizer->normalize($object->getEntry(), 'json', $context);
            }

            if ($object->isInitialized('score') && null !== $object->getScore()) {
                $data['score'] = $object->getScore();
            }

            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }

            if ($object->isInitialized('chaptersRead') && null !== $object->getChaptersRead()) {
                $data['chapters_read'] = $object->getChaptersRead();
            }

            if ($object->isInitialized('chaptersTotal') && null !== $object->getChaptersTotal()) {
                $data['chapters_total'] = $object->getChaptersTotal();
            }

            if ($object->isInitialized('volumesRead') && null !== $object->getVolumesRead()) {
                $data['volumes_read'] = $object->getVolumesRead();
            }

            if ($object->isInitialized('volumesTotal') && null !== $object->getVolumesTotal()) {
                $data['volumes_total'] = $object->getVolumesTotal();
            }

            if ($object->isInitialized('date') && null !== $object->getDate()) {
                $data['date'] = $object->getDate();
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
            return [UserUpdatesDataMangaItem::class => false];
        }
    }
}

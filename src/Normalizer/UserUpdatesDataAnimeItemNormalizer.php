<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\AnimeMeta;
use Jikan\JikanPHP\Model\UserUpdatesDataAnimeItem;
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
    class UserUpdatesDataAnimeItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return UserUpdatesDataAnimeItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof UserUpdatesDataAnimeItem;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new UserUpdatesDataAnimeItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('entry', $data)) {
                $object->setEntry($this->denormalizer->denormalize($data['entry'], AnimeMeta::class, 'json', $context));
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

            if (\array_key_exists('episodes_seen', $data) && null !== $data['episodes_seen']) {
                $object->setEpisodesSeen($data['episodes_seen']);
                unset($data['episodes_seen']);
            } elseif (\array_key_exists('episodes_seen', $data) && null === $data['episodes_seen']) {
                $object->setEpisodesSeen(null);
            }

            if (\array_key_exists('episodes_total', $data) && null !== $data['episodes_total']) {
                $object->setEpisodesTotal($data['episodes_total']);
                unset($data['episodes_total']);
            } elseif (\array_key_exists('episodes_total', $data) && null === $data['episodes_total']) {
                $object->setEpisodesTotal(null);
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

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
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

            if ($object->isInitialized('episodesSeen') && null !== $object->getEpisodesSeen()) {
                $data['episodes_seen'] = $object->getEpisodesSeen();
            }

            if ($object->isInitialized('episodesTotal') && null !== $object->getEpisodesTotal()) {
                $data['episodes_total'] = $object->getEpisodesTotal();
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
            return [UserUpdatesDataAnimeItem::class => false];
        }
    }
} else {
    class UserUpdatesDataAnimeItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return UserUpdatesDataAnimeItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof UserUpdatesDataAnimeItem;
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

            $object = new UserUpdatesDataAnimeItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('entry', $data)) {
                $object->setEntry($this->denormalizer->denormalize($data['entry'], AnimeMeta::class, 'json', $context));
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

            if (\array_key_exists('episodes_seen', $data) && null !== $data['episodes_seen']) {
                $object->setEpisodesSeen($data['episodes_seen']);
                unset($data['episodes_seen']);
            } elseif (\array_key_exists('episodes_seen', $data) && null === $data['episodes_seen']) {
                $object->setEpisodesSeen(null);
            }

            if (\array_key_exists('episodes_total', $data) && null !== $data['episodes_total']) {
                $object->setEpisodesTotal($data['episodes_total']);
                unset($data['episodes_total']);
            } elseif (\array_key_exists('episodes_total', $data) && null === $data['episodes_total']) {
                $object->setEpisodesTotal(null);
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
         */
        public function normalize($object, $format = null, array $context = []): array|\ArrayObject|bool|float|int|string|null
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

            if ($object->isInitialized('episodesSeen') && null !== $object->getEpisodesSeen()) {
                $data['episodes_seen'] = $object->getEpisodesSeen();
            }

            if ($object->isInitialized('episodesTotal') && null !== $object->getEpisodesTotal()) {
                $data['episodes_total'] = $object->getEpisodesTotal();
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
            return [UserUpdatesDataAnimeItem::class => false];
        }
    }
}

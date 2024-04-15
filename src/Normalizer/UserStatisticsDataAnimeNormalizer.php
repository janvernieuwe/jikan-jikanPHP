<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\UserStatisticsDataAnime;
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
    class UserStatisticsDataAnimeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return UserStatisticsDataAnime::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof UserStatisticsDataAnime;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new UserStatisticsDataAnime();
            if (\array_key_exists('days_watched', $data) && \is_int($data['days_watched'])) {
                $data['days_watched'] = (float) $data['days_watched'];
            }

            if (\array_key_exists('mean_score', $data) && \is_int($data['mean_score'])) {
                $data['mean_score'] = (float) $data['mean_score'];
            }

            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('days_watched', $data)) {
                $object->setDaysWatched($data['days_watched']);
                unset($data['days_watched']);
            }

            if (\array_key_exists('mean_score', $data)) {
                $object->setMeanScore($data['mean_score']);
                unset($data['mean_score']);
            }

            if (\array_key_exists('watching', $data)) {
                $object->setWatching($data['watching']);
                unset($data['watching']);
            }

            if (\array_key_exists('completed', $data)) {
                $object->setCompleted($data['completed']);
                unset($data['completed']);
            }

            if (\array_key_exists('on_hold', $data)) {
                $object->setOnHold($data['on_hold']);
                unset($data['on_hold']);
            }

            if (\array_key_exists('dropped', $data)) {
                $object->setDropped($data['dropped']);
                unset($data['dropped']);
            }

            if (\array_key_exists('plan_to_watch', $data)) {
                $object->setPlanToWatch($data['plan_to_watch']);
                unset($data['plan_to_watch']);
            }

            if (\array_key_exists('total_entries', $data)) {
                $object->setTotalEntries($data['total_entries']);
                unset($data['total_entries']);
            }

            if (\array_key_exists('rewatched', $data)) {
                $object->setRewatched($data['rewatched']);
                unset($data['rewatched']);
            }

            if (\array_key_exists('episodes_watched', $data)) {
                $object->setEpisodesWatched($data['episodes_watched']);
                unset($data['episodes_watched']);
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
            if ($object->isInitialized('daysWatched') && null !== $object->getDaysWatched()) {
                $data['days_watched'] = $object->getDaysWatched();
            }

            if ($object->isInitialized('meanScore') && null !== $object->getMeanScore()) {
                $data['mean_score'] = $object->getMeanScore();
            }

            if ($object->isInitialized('watching') && null !== $object->getWatching()) {
                $data['watching'] = $object->getWatching();
            }

            if ($object->isInitialized('completed') && null !== $object->getCompleted()) {
                $data['completed'] = $object->getCompleted();
            }

            if ($object->isInitialized('onHold') && null !== $object->getOnHold()) {
                $data['on_hold'] = $object->getOnHold();
            }

            if ($object->isInitialized('dropped') && null !== $object->getDropped()) {
                $data['dropped'] = $object->getDropped();
            }

            if ($object->isInitialized('planToWatch') && null !== $object->getPlanToWatch()) {
                $data['plan_to_watch'] = $object->getPlanToWatch();
            }

            if ($object->isInitialized('totalEntries') && null !== $object->getTotalEntries()) {
                $data['total_entries'] = $object->getTotalEntries();
            }

            if ($object->isInitialized('rewatched') && null !== $object->getRewatched()) {
                $data['rewatched'] = $object->getRewatched();
            }

            if ($object->isInitialized('episodesWatched') && null !== $object->getEpisodesWatched()) {
                $data['episodes_watched'] = $object->getEpisodesWatched();
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
            return [UserStatisticsDataAnime::class => false];
        }
    }
} else {
    class UserStatisticsDataAnimeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return UserStatisticsDataAnime::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof UserStatisticsDataAnime;
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

            $object = new UserStatisticsDataAnime();
            if (\array_key_exists('days_watched', $data) && \is_int($data['days_watched'])) {
                $data['days_watched'] = (float) $data['days_watched'];
            }

            if (\array_key_exists('mean_score', $data) && \is_int($data['mean_score'])) {
                $data['mean_score'] = (float) $data['mean_score'];
            }

            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('days_watched', $data)) {
                $object->setDaysWatched($data['days_watched']);
                unset($data['days_watched']);
            }

            if (\array_key_exists('mean_score', $data)) {
                $object->setMeanScore($data['mean_score']);
                unset($data['mean_score']);
            }

            if (\array_key_exists('watching', $data)) {
                $object->setWatching($data['watching']);
                unset($data['watching']);
            }

            if (\array_key_exists('completed', $data)) {
                $object->setCompleted($data['completed']);
                unset($data['completed']);
            }

            if (\array_key_exists('on_hold', $data)) {
                $object->setOnHold($data['on_hold']);
                unset($data['on_hold']);
            }

            if (\array_key_exists('dropped', $data)) {
                $object->setDropped($data['dropped']);
                unset($data['dropped']);
            }

            if (\array_key_exists('plan_to_watch', $data)) {
                $object->setPlanToWatch($data['plan_to_watch']);
                unset($data['plan_to_watch']);
            }

            if (\array_key_exists('total_entries', $data)) {
                $object->setTotalEntries($data['total_entries']);
                unset($data['total_entries']);
            }

            if (\array_key_exists('rewatched', $data)) {
                $object->setRewatched($data['rewatched']);
                unset($data['rewatched']);
            }

            if (\array_key_exists('episodes_watched', $data)) {
                $object->setEpisodesWatched($data['episodes_watched']);
                unset($data['episodes_watched']);
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
            if ($object->isInitialized('daysWatched') && null !== $object->getDaysWatched()) {
                $data['days_watched'] = $object->getDaysWatched();
            }

            if ($object->isInitialized('meanScore') && null !== $object->getMeanScore()) {
                $data['mean_score'] = $object->getMeanScore();
            }

            if ($object->isInitialized('watching') && null !== $object->getWatching()) {
                $data['watching'] = $object->getWatching();
            }

            if ($object->isInitialized('completed') && null !== $object->getCompleted()) {
                $data['completed'] = $object->getCompleted();
            }

            if ($object->isInitialized('onHold') && null !== $object->getOnHold()) {
                $data['on_hold'] = $object->getOnHold();
            }

            if ($object->isInitialized('dropped') && null !== $object->getDropped()) {
                $data['dropped'] = $object->getDropped();
            }

            if ($object->isInitialized('planToWatch') && null !== $object->getPlanToWatch()) {
                $data['plan_to_watch'] = $object->getPlanToWatch();
            }

            if ($object->isInitialized('totalEntries') && null !== $object->getTotalEntries()) {
                $data['total_entries'] = $object->getTotalEntries();
            }

            if ($object->isInitialized('rewatched') && null !== $object->getRewatched()) {
                $data['rewatched'] = $object->getRewatched();
            }

            if ($object->isInitialized('episodesWatched') && null !== $object->getEpisodesWatched()) {
                $data['episodes_watched'] = $object->getEpisodesWatched();
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
            return [UserStatisticsDataAnime::class => false];
        }
    }
}

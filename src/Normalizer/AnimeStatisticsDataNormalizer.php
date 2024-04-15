<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jikan\JikanPHP\Model\AnimeStatisticsData;
use Jikan\JikanPHP\Model\AnimeStatisticsDataScoresItem;
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
    class AnimeStatisticsDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return AnimeStatisticsData::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof AnimeStatisticsData;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new AnimeStatisticsData();
            if (null === $data || false === \is_array($data)) {
                return $object;
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

            if (\array_key_exists('total', $data)) {
                $object->setTotal($data['total']);
                unset($data['total']);
            }

            if (\array_key_exists('scores', $data)) {
                $values = [];
                foreach ($data['scores'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, AnimeStatisticsDataScoresItem::class, 'json', $context);
                }

                $object->setScores($values);
                unset($data['scores']);
            }

            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|ArrayObject|null
        {
            $data = [];
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

            if ($object->isInitialized('total') && null !== $object->getTotal()) {
                $data['total'] = $object->getTotal();
            }

            if ($object->isInitialized('scores') && null !== $object->getScores()) {
                $values = [];
                foreach ($object->getScores() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['scores'] = $values;
            }

            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [AnimeStatisticsData::class => false];
        }
    }
} else {
    class AnimeStatisticsDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return AnimeStatisticsData::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof AnimeStatisticsData;
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

            $object = new AnimeStatisticsData();
            if (null === $data || false === \is_array($data)) {
                return $object;
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

            if (\array_key_exists('total', $data)) {
                $object->setTotal($data['total']);
                unset($data['total']);
            }

            if (\array_key_exists('scores', $data)) {
                $values = [];
                foreach ($data['scores'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, AnimeStatisticsDataScoresItem::class, 'json', $context);
                }

                $object->setScores($values);
                unset($data['scores']);
            }

            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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

            if ($object->isInitialized('total') && null !== $object->getTotal()) {
                $data['total'] = $object->getTotal();
            }

            if ($object->isInitialized('scores') && null !== $object->getScores()) {
                $values = [];
                foreach ($object->getScores() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['scores'] = $values;
            }

            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [AnimeStatisticsData::class => false];
        }
    }
}

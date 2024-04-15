<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\MangaStatisticsData;
use Jikan\JikanPHP\Model\MangaStatisticsDataScoresItem;
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
    class MangaStatisticsDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return MangaStatisticsData::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof MangaStatisticsData;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new MangaStatisticsData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('reading', $data)) {
                $object->setReading($data['reading']);
                unset($data['reading']);
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

            if (\array_key_exists('plan_to_read', $data)) {
                $object->setPlanToRead($data['plan_to_read']);
                unset($data['plan_to_read']);
            }

            if (\array_key_exists('total', $data)) {
                $object->setTotal($data['total']);
                unset($data['total']);
            }

            if (\array_key_exists('scores', $data)) {
                $values = [];
                foreach ($data['scores'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, MangaStatisticsDataScoresItem::class, 'json', $context);
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

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('reading') && null !== $object->getReading()) {
                $data['reading'] = $object->getReading();
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

            if ($object->isInitialized('planToRead') && null !== $object->getPlanToRead()) {
                $data['plan_to_read'] = $object->getPlanToRead();
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
            return [MangaStatisticsData::class => false];
        }
    }
} else {
    class MangaStatisticsDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return MangaStatisticsData::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof MangaStatisticsData;
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

            $object = new MangaStatisticsData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('reading', $data)) {
                $object->setReading($data['reading']);
                unset($data['reading']);
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

            if (\array_key_exists('plan_to_read', $data)) {
                $object->setPlanToRead($data['plan_to_read']);
                unset($data['plan_to_read']);
            }

            if (\array_key_exists('total', $data)) {
                $object->setTotal($data['total']);
                unset($data['total']);
            }

            if (\array_key_exists('scores', $data)) {
                $values = [];
                foreach ($data['scores'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, MangaStatisticsDataScoresItem::class, 'json', $context);
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
         */
        public function normalize($object, $format = null, array $context = []): array|\ArrayObject|bool|float|int|string|null
        {
            $data = [];
            if ($object->isInitialized('reading') && null !== $object->getReading()) {
                $data['reading'] = $object->getReading();
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

            if ($object->isInitialized('planToRead') && null !== $object->getPlanToRead()) {
                $data['plan_to_read'] = $object->getPlanToRead();
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
            return [MangaStatisticsData::class => false];
        }
    }
}

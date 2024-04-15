<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\AnimeMeta;
use Jikan\JikanPHP\Model\WatchEpisodesdataItem;
use Jikan\JikanPHP\Model\WatchEpisodesdataItemEpisodesItem;
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
    class WatchEpisodesdataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return WatchEpisodesdataItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof WatchEpisodesdataItem;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new WatchEpisodesdataItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('entry', $data)) {
                $object->setEntry($this->denormalizer->denormalize($data['entry'], AnimeMeta::class, 'json', $context));
                unset($data['entry']);
            }

            if (\array_key_exists('episodes', $data)) {
                $values = [];
                foreach ($data['episodes'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, WatchEpisodesdataItemEpisodesItem::class, 'json', $context);
                }

                $object->setEpisodes($values);
                unset($data['episodes']);
            }

            if (\array_key_exists('region_locked', $data)) {
                $object->setRegionLocked($data['region_locked']);
                unset($data['region_locked']);
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
            if ($object->isInitialized('entry') && null !== $object->getEntry()) {
                $data['entry'] = $this->normalizer->normalize($object->getEntry(), 'json', $context);
            }

            if ($object->isInitialized('episodes') && null !== $object->getEpisodes()) {
                $values = [];
                foreach ($object->getEpisodes() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['episodes'] = $values;
            }

            if ($object->isInitialized('regionLocked') && null !== $object->getRegionLocked()) {
                $data['region_locked'] = $object->getRegionLocked();
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
            return [WatchEpisodesdataItem::class => false];
        }
    }
} else {
    class WatchEpisodesdataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return WatchEpisodesdataItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof WatchEpisodesdataItem;
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

            $object = new WatchEpisodesdataItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('entry', $data)) {
                $object->setEntry($this->denormalizer->denormalize($data['entry'], AnimeMeta::class, 'json', $context));
                unset($data['entry']);
            }

            if (\array_key_exists('episodes', $data)) {
                $values = [];
                foreach ($data['episodes'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, WatchEpisodesdataItemEpisodesItem::class, 'json', $context);
                }

                $object->setEpisodes($values);
                unset($data['episodes']);
            }

            if (\array_key_exists('region_locked', $data)) {
                $object->setRegionLocked($data['region_locked']);
                unset($data['region_locked']);
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
            if ($object->isInitialized('entry') && null !== $object->getEntry()) {
                $data['entry'] = $this->normalizer->normalize($object->getEntry(), 'json', $context);
            }

            if ($object->isInitialized('episodes') && null !== $object->getEpisodes()) {
                $values = [];
                foreach ($object->getEpisodes() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['episodes'] = $values;
            }

            if ($object->isInitialized('regionLocked') && null !== $object->getRegionLocked()) {
                $data['region_locked'] = $object->getRegionLocked();
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
            return [WatchEpisodesdataItem::class => false];
        }
    }
}

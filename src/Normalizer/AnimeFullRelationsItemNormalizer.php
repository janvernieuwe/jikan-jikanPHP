<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jikan\JikanPHP\Model\AnimeFullRelationsItem;
use Jikan\JikanPHP\Model\MalUrl;
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
    class AnimeFullRelationsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return AnimeFullRelationsItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof AnimeFullRelationsItem;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new AnimeFullRelationsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('relation', $data)) {
                $object->setRelation($data['relation']);
                unset($data['relation']);
            }

            if (\array_key_exists('entry', $data)) {
                $values = [];
                foreach ($data['entry'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, MalUrl::class, 'json', $context);
                }

                $object->setEntry($values);
                unset($data['entry']);
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
            if ($object->isInitialized('relation') && null !== $object->getRelation()) {
                $data['relation'] = $object->getRelation();
            }

            if ($object->isInitialized('entry') && null !== $object->getEntry()) {
                $values = [];
                foreach ($object->getEntry() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['entry'] = $values;
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
            return [AnimeFullRelationsItem::class => false];
        }
    }
} else {
    class AnimeFullRelationsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return AnimeFullRelationsItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof AnimeFullRelationsItem;
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

            $object = new AnimeFullRelationsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('relation', $data)) {
                $object->setRelation($data['relation']);
                unset($data['relation']);
            }

            if (\array_key_exists('entry', $data)) {
                $values = [];
                foreach ($data['entry'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, MalUrl::class, 'json', $context);
                }

                $object->setEntry($values);
                unset($data['entry']);
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
            if ($object->isInitialized('relation') && null !== $object->getRelation()) {
                $data['relation'] = $object->getRelation();
            }

            if ($object->isInitialized('entry') && null !== $object->getEntry()) {
                $values = [];
                foreach ($object->getEntry() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['entry'] = $values;
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
            return [AnimeFullRelationsItem::class => false];
        }
    }
}

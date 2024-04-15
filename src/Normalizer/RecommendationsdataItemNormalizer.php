<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\RecommendationsdataItem;
use Jikan\JikanPHP\Model\UserById;
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
    class RecommendationsdataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return RecommendationsdataItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof RecommendationsdataItem;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new RecommendationsdataItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('mal_id', $data)) {
                $object->setMalId($data['mal_id']);
                unset($data['mal_id']);
            }

            if (\array_key_exists('entry', $data)) {
                $values = [];
                foreach ($data['entry'] as $value) {
                    $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value as $key => $value_1) {
                        $values_1[$key] = $value_1;
                    }

                    $values[] = $values_1;
                }

                $object->setEntry($values);
                unset($data['entry']);
            }

            if (\array_key_exists('content', $data)) {
                $object->setContent($data['content']);
                unset($data['content']);
            }

            if (\array_key_exists('user', $data)) {
                $object->setUser($this->denormalizer->denormalize($data['user'], UserById::class, 'json', $context));
                unset($data['user']);
            }

            foreach ($data as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_2;
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

            if ($object->isInitialized('entry') && null !== $object->getEntry()) {
                $values = [];
                foreach ($object->getEntry() as $value) {
                    $values_1 = [];
                    foreach ($value as $key => $value_1) {
                        $values_1[$key] = $value_1;
                    }

                    $values[] = $values_1;
                }

                $data['entry'] = $values;
            }

            if ($object->isInitialized('content') && null !== $object->getContent()) {
                $data['content'] = $object->getContent();
            }

            if ($object->isInitialized('user') && null !== $object->getUser()) {
                $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
            }

            foreach ($object as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [RecommendationsdataItem::class => false];
        }
    }
} else {
    class RecommendationsdataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return RecommendationsdataItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof RecommendationsdataItem;
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

            $object = new RecommendationsdataItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('mal_id', $data)) {
                $object->setMalId($data['mal_id']);
                unset($data['mal_id']);
            }

            if (\array_key_exists('entry', $data)) {
                $values = [];
                foreach ($data['entry'] as $value) {
                    $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value as $key => $value_1) {
                        $values_1[$key] = $value_1;
                    }

                    $values[] = $values_1;
                }

                $object->setEntry($values);
                unset($data['entry']);
            }

            if (\array_key_exists('content', $data)) {
                $object->setContent($data['content']);
                unset($data['content']);
            }

            if (\array_key_exists('user', $data)) {
                $object->setUser($this->denormalizer->denormalize($data['user'], UserById::class, 'json', $context));
                unset($data['user']);
            }

            foreach ($data as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_2;
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

            if ($object->isInitialized('entry') && null !== $object->getEntry()) {
                $values = [];
                foreach ($object->getEntry() as $value) {
                    $values_1 = [];
                    foreach ($value as $key => $value_1) {
                        $values_1[$key] = $value_1;
                    }

                    $values[] = $values_1;
                }

                $data['entry'] = $values;
            }

            if ($object->isInitialized('content') && null !== $object->getContent()) {
                $data['content'] = $object->getContent();
            }

            if ($object->isInitialized('user') && null !== $object->getUser()) {
                $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
            }

            foreach ($object as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [RecommendationsdataItem::class => false];
        }
    }
}

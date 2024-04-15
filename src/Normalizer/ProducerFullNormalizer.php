<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\CommonImages;
use Jikan\JikanPHP\Model\ProducerFull;
use Jikan\JikanPHP\Model\ProducerFullExternalItem;
use Jikan\JikanPHP\Model\Title;
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
    class ProducerFullNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return ProducerFull::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof ProducerFull;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new ProducerFull();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('mal_id', $data)) {
                $object->setMalId($data['mal_id']);
                unset($data['mal_id']);
            }

            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }

            if (\array_key_exists('titles', $data)) {
                $values = [];
                foreach ($data['titles'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, Title::class, 'json', $context);
                }

                $object->setTitles($values);
                unset($data['titles']);
            }

            if (\array_key_exists('images', $data)) {
                $object->setImages($this->denormalizer->denormalize($data['images'], CommonImages::class, 'json', $context));
                unset($data['images']);
            }

            if (\array_key_exists('favorites', $data)) {
                $object->setFavorites($data['favorites']);
                unset($data['favorites']);
            }

            if (\array_key_exists('count', $data)) {
                $object->setCount($data['count']);
                unset($data['count']);
            }

            if (\array_key_exists('established', $data) && null !== $data['established']) {
                $object->setEstablished($data['established']);
                unset($data['established']);
            } elseif (\array_key_exists('established', $data) && null === $data['established']) {
                $object->setEstablished(null);
            }

            if (\array_key_exists('about', $data) && null !== $data['about']) {
                $object->setAbout($data['about']);
                unset($data['about']);
            } elseif (\array_key_exists('about', $data) && null === $data['about']) {
                $object->setAbout(null);
            }

            if (\array_key_exists('external', $data)) {
                $values_1 = [];
                foreach ($data['external'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, ProducerFullExternalItem::class, 'json', $context);
                }

                $object->setExternal($values_1);
                unset($data['external']);
            }

            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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

            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
            }

            if ($object->isInitialized('titles') && null !== $object->getTitles()) {
                $values = [];
                foreach ($object->getTitles() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['titles'] = $values;
            }

            if ($object->isInitialized('images') && null !== $object->getImages()) {
                $data['images'] = $this->normalizer->normalize($object->getImages(), 'json', $context);
            }

            if ($object->isInitialized('favorites') && null !== $object->getFavorites()) {
                $data['favorites'] = $object->getFavorites();
            }

            if ($object->isInitialized('count') && null !== $object->getCount()) {
                $data['count'] = $object->getCount();
            }

            if ($object->isInitialized('established') && null !== $object->getEstablished()) {
                $data['established'] = $object->getEstablished();
            }

            if ($object->isInitialized('about') && null !== $object->getAbout()) {
                $data['about'] = $object->getAbout();
            }

            if ($object->isInitialized('external') && null !== $object->getExternal()) {
                $values_1 = [];
                foreach ($object->getExternal() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }

                $data['external'] = $values_1;
            }

            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [ProducerFull::class => false];
        }
    }
} else {
    class ProducerFullNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return ProducerFull::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof ProducerFull;
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

            $object = new ProducerFull();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('mal_id', $data)) {
                $object->setMalId($data['mal_id']);
                unset($data['mal_id']);
            }

            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }

            if (\array_key_exists('titles', $data)) {
                $values = [];
                foreach ($data['titles'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, Title::class, 'json', $context);
                }

                $object->setTitles($values);
                unset($data['titles']);
            }

            if (\array_key_exists('images', $data)) {
                $object->setImages($this->denormalizer->denormalize($data['images'], CommonImages::class, 'json', $context));
                unset($data['images']);
            }

            if (\array_key_exists('favorites', $data)) {
                $object->setFavorites($data['favorites']);
                unset($data['favorites']);
            }

            if (\array_key_exists('count', $data)) {
                $object->setCount($data['count']);
                unset($data['count']);
            }

            if (\array_key_exists('established', $data) && null !== $data['established']) {
                $object->setEstablished($data['established']);
                unset($data['established']);
            } elseif (\array_key_exists('established', $data) && null === $data['established']) {
                $object->setEstablished(null);
            }

            if (\array_key_exists('about', $data) && null !== $data['about']) {
                $object->setAbout($data['about']);
                unset($data['about']);
            } elseif (\array_key_exists('about', $data) && null === $data['about']) {
                $object->setAbout(null);
            }

            if (\array_key_exists('external', $data)) {
                $values_1 = [];
                foreach ($data['external'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, ProducerFullExternalItem::class, 'json', $context);
                }

                $object->setExternal($values_1);
                unset($data['external']);
            }

            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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

            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
            }

            if ($object->isInitialized('titles') && null !== $object->getTitles()) {
                $values = [];
                foreach ($object->getTitles() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['titles'] = $values;
            }

            if ($object->isInitialized('images') && null !== $object->getImages()) {
                $data['images'] = $this->normalizer->normalize($object->getImages(), 'json', $context);
            }

            if ($object->isInitialized('favorites') && null !== $object->getFavorites()) {
                $data['favorites'] = $object->getFavorites();
            }

            if ($object->isInitialized('count') && null !== $object->getCount()) {
                $data['count'] = $object->getCount();
            }

            if ($object->isInitialized('established') && null !== $object->getEstablished()) {
                $data['established'] = $object->getEstablished();
            }

            if ($object->isInitialized('about') && null !== $object->getAbout()) {
                $data['about'] = $object->getAbout();
            }

            if ($object->isInitialized('external') && null !== $object->getExternal()) {
                $values_1 = [];
                foreach ($object->getExternal() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }

                $data['external'] = $values_1;
            }

            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [ProducerFull::class => false];
        }
    }
}

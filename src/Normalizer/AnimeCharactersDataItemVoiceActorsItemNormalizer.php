<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\AnimeCharactersDataItemVoiceActorsItem;
use Jikan\JikanPHP\Model\AnimeCharactersDataItemVoiceActorsItemPerson;
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
    class AnimeCharactersDataItemVoiceActorsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return AnimeCharactersDataItemVoiceActorsItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof AnimeCharactersDataItemVoiceActorsItem;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new AnimeCharactersDataItemVoiceActorsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('person', $data)) {
                $object->setPerson($this->denormalizer->denormalize($data['person'], AnimeCharactersDataItemVoiceActorsItemPerson::class, 'json', $context));
                unset($data['person']);
            }

            if (\array_key_exists('language', $data)) {
                $object->setLanguage($data['language']);
                unset($data['language']);
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
            if ($object->isInitialized('person') && null !== $object->getPerson()) {
                $data['person'] = $this->normalizer->normalize($object->getPerson(), 'json', $context);
            }

            if ($object->isInitialized('language') && null !== $object->getLanguage()) {
                $data['language'] = $object->getLanguage();
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
            return [AnimeCharactersDataItemVoiceActorsItem::class => false];
        }
    }
} else {
    class AnimeCharactersDataItemVoiceActorsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return AnimeCharactersDataItemVoiceActorsItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof AnimeCharactersDataItemVoiceActorsItem;
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

            $object = new AnimeCharactersDataItemVoiceActorsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('person', $data)) {
                $object->setPerson($this->denormalizer->denormalize($data['person'], AnimeCharactersDataItemVoiceActorsItemPerson::class, 'json', $context));
                unset($data['person']);
            }

            if (\array_key_exists('language', $data)) {
                $object->setLanguage($data['language']);
                unset($data['language']);
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
            if ($object->isInitialized('person') && null !== $object->getPerson()) {
                $data['person'] = $this->normalizer->normalize($object->getPerson(), 'json', $context);
            }

            if ($object->isInitialized('language') && null !== $object->getLanguage()) {
                $data['language'] = $object->getLanguage();
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
            return [AnimeCharactersDataItemVoiceActorsItem::class => false];
        }
    }
}

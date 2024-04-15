<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jikan\JikanPHP\Model\AnimeCharactersDataItem;
use Jikan\JikanPHP\Model\AnimeCharactersDataItemCharacter;
use Jikan\JikanPHP\Model\AnimeCharactersDataItemVoiceActorsItem;
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
    class AnimeCharactersDataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return AnimeCharactersDataItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof AnimeCharactersDataItem;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new AnimeCharactersDataItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('character', $data)) {
                $object->setCharacter($this->denormalizer->denormalize($data['character'], AnimeCharactersDataItemCharacter::class, 'json', $context));
                unset($data['character']);
            }

            if (\array_key_exists('role', $data)) {
                $object->setRole($data['role']);
                unset($data['role']);
            }

            if (\array_key_exists('voice_actors', $data)) {
                $values = [];
                foreach ($data['voice_actors'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, AnimeCharactersDataItemVoiceActorsItem::class, 'json', $context);
                }

                $object->setVoiceActors($values);
                unset($data['voice_actors']);
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
            if ($object->isInitialized('character') && null !== $object->getCharacter()) {
                $data['character'] = $this->normalizer->normalize($object->getCharacter(), 'json', $context);
            }

            if ($object->isInitialized('role') && null !== $object->getRole()) {
                $data['role'] = $object->getRole();
            }

            if ($object->isInitialized('voiceActors') && null !== $object->getVoiceActors()) {
                $values = [];
                foreach ($object->getVoiceActors() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['voice_actors'] = $values;
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
            return [AnimeCharactersDataItem::class => false];
        }
    }
} else {
    class AnimeCharactersDataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return AnimeCharactersDataItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof AnimeCharactersDataItem;
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

            $object = new AnimeCharactersDataItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('character', $data)) {
                $object->setCharacter($this->denormalizer->denormalize($data['character'], AnimeCharactersDataItemCharacter::class, 'json', $context));
                unset($data['character']);
            }

            if (\array_key_exists('role', $data)) {
                $object->setRole($data['role']);
                unset($data['role']);
            }

            if (\array_key_exists('voice_actors', $data)) {
                $values = [];
                foreach ($data['voice_actors'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, AnimeCharactersDataItemVoiceActorsItem::class, 'json', $context);
                }

                $object->setVoiceActors($values);
                unset($data['voice_actors']);
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
            if ($object->isInitialized('character') && null !== $object->getCharacter()) {
                $data['character'] = $this->normalizer->normalize($object->getCharacter(), 'json', $context);
            }

            if ($object->isInitialized('role') && null !== $object->getRole()) {
                $data['role'] = $object->getRole();
            }

            if ($object->isInitialized('voiceActors') && null !== $object->getVoiceActors()) {
                $values = [];
                foreach ($object->getVoiceActors() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['voice_actors'] = $values;
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
            return [AnimeCharactersDataItem::class => false];
        }
    }
}

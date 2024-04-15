<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jikan\JikanPHP\Model\TrailerBase;
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
    class TrailerBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return TrailerBase::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof TrailerBase;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new TrailerBase();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('youtube_id', $data) && null !== $data['youtube_id']) {
                $object->setYoutubeId($data['youtube_id']);
                unset($data['youtube_id']);
            } elseif (\array_key_exists('youtube_id', $data) && null === $data['youtube_id']) {
                $object->setYoutubeId(null);
            }

            if (\array_key_exists('url', $data) && null !== $data['url']) {
                $object->setUrl($data['url']);
                unset($data['url']);
            } elseif (\array_key_exists('url', $data) && null === $data['url']) {
                $object->setUrl(null);
            }

            if (\array_key_exists('embed_url', $data) && null !== $data['embed_url']) {
                $object->setEmbedUrl($data['embed_url']);
                unset($data['embed_url']);
            } elseif (\array_key_exists('embed_url', $data) && null === $data['embed_url']) {
                $object->setEmbedUrl(null);
            }

            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('youtubeId') && null !== $object->getYoutubeId()) {
                $data['youtube_id'] = $object->getYoutubeId();
            }

            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
            }

            if ($object->isInitialized('embedUrl') && null !== $object->getEmbedUrl()) {
                $data['embed_url'] = $object->getEmbedUrl();
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
            return [TrailerBase::class => false];
        }
    }
} else {
    class TrailerBaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return TrailerBase::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof TrailerBase;
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

            $object = new TrailerBase();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('youtube_id', $data) && null !== $data['youtube_id']) {
                $object->setYoutubeId($data['youtube_id']);
                unset($data['youtube_id']);
            } elseif (\array_key_exists('youtube_id', $data) && null === $data['youtube_id']) {
                $object->setYoutubeId(null);
            }

            if (\array_key_exists('url', $data) && null !== $data['url']) {
                $object->setUrl($data['url']);
                unset($data['url']);
            } elseif (\array_key_exists('url', $data) && null === $data['url']) {
                $object->setUrl(null);
            }

            if (\array_key_exists('embed_url', $data) && null !== $data['embed_url']) {
                $object->setEmbedUrl($data['embed_url']);
                unset($data['embed_url']);
            } elseif (\array_key_exists('embed_url', $data) && null === $data['embed_url']) {
                $object->setEmbedUrl(null);
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
         *
         * @return array|string|int|float|bool|ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('youtubeId') && null !== $object->getYoutubeId()) {
                $data['youtube_id'] = $object->getYoutubeId();
            }

            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
            }

            if ($object->isInitialized('embedUrl') && null !== $object->getEmbedUrl()) {
                $data['embed_url'] = $object->getEmbedUrl();
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
            return [TrailerBase::class => false];
        }
    }
}

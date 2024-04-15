<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jikan\JikanPHP\Model\NewsDataItem;
use Jikan\JikanPHP\Model\CommonImages;
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
    class NewsDataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return NewsDataItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof NewsDataItem;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new NewsDataItem();
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

            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }

            if (\array_key_exists('date', $data)) {
                $object->setDate($data['date']);
                unset($data['date']);
            }

            if (\array_key_exists('author_username', $data)) {
                $object->setAuthorUsername($data['author_username']);
                unset($data['author_username']);
            }

            if (\array_key_exists('author_url', $data)) {
                $object->setAuthorUrl($data['author_url']);
                unset($data['author_url']);
            }

            if (\array_key_exists('forum_url', $data)) {
                $object->setForumUrl($data['forum_url']);
                unset($data['forum_url']);
            }

            if (\array_key_exists('images', $data)) {
                $object->setImages($this->denormalizer->denormalize($data['images'], CommonImages::class, 'json', $context));
                unset($data['images']);
            }

            if (\array_key_exists('comments', $data)) {
                $object->setComments($data['comments']);
                unset($data['comments']);
            }

            if (\array_key_exists('excerpt', $data)) {
                $object->setExcerpt($data['excerpt']);
                unset($data['excerpt']);
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
            if ($object->isInitialized('malId') && null !== $object->getMalId()) {
                $data['mal_id'] = $object->getMalId();
            }

            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
            }

            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }

            if ($object->isInitialized('date') && null !== $object->getDate()) {
                $data['date'] = $object->getDate();
            }

            if ($object->isInitialized('authorUsername') && null !== $object->getAuthorUsername()) {
                $data['author_username'] = $object->getAuthorUsername();
            }

            if ($object->isInitialized('authorUrl') && null !== $object->getAuthorUrl()) {
                $data['author_url'] = $object->getAuthorUrl();
            }

            if ($object->isInitialized('forumUrl') && null !== $object->getForumUrl()) {
                $data['forum_url'] = $object->getForumUrl();
            }

            if ($object->isInitialized('images') && null !== $object->getImages()) {
                $data['images'] = $this->normalizer->normalize($object->getImages(), 'json', $context);
            }

            if ($object->isInitialized('comments') && null !== $object->getComments()) {
                $data['comments'] = $object->getComments();
            }

            if ($object->isInitialized('excerpt') && null !== $object->getExcerpt()) {
                $data['excerpt'] = $object->getExcerpt();
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
            return [NewsDataItem::class => false];
        }
    }
} else {
    class NewsDataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return NewsDataItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof NewsDataItem;
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

            $object = new NewsDataItem();
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

            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }

            if (\array_key_exists('date', $data)) {
                $object->setDate($data['date']);
                unset($data['date']);
            }

            if (\array_key_exists('author_username', $data)) {
                $object->setAuthorUsername($data['author_username']);
                unset($data['author_username']);
            }

            if (\array_key_exists('author_url', $data)) {
                $object->setAuthorUrl($data['author_url']);
                unset($data['author_url']);
            }

            if (\array_key_exists('forum_url', $data)) {
                $object->setForumUrl($data['forum_url']);
                unset($data['forum_url']);
            }

            if (\array_key_exists('images', $data)) {
                $object->setImages($this->denormalizer->denormalize($data['images'], CommonImages::class, 'json', $context));
                unset($data['images']);
            }

            if (\array_key_exists('comments', $data)) {
                $object->setComments($data['comments']);
                unset($data['comments']);
            }

            if (\array_key_exists('excerpt', $data)) {
                $object->setExcerpt($data['excerpt']);
                unset($data['excerpt']);
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
            if ($object->isInitialized('malId') && null !== $object->getMalId()) {
                $data['mal_id'] = $object->getMalId();
            }

            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
            }

            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }

            if ($object->isInitialized('date') && null !== $object->getDate()) {
                $data['date'] = $object->getDate();
            }

            if ($object->isInitialized('authorUsername') && null !== $object->getAuthorUsername()) {
                $data['author_username'] = $object->getAuthorUsername();
            }

            if ($object->isInitialized('authorUrl') && null !== $object->getAuthorUrl()) {
                $data['author_url'] = $object->getAuthorUrl();
            }

            if ($object->isInitialized('forumUrl') && null !== $object->getForumUrl()) {
                $data['forum_url'] = $object->getForumUrl();
            }

            if ($object->isInitialized('images') && null !== $object->getImages()) {
                $data['images'] = $this->normalizer->normalize($object->getImages(), 'json', $context);
            }

            if ($object->isInitialized('comments') && null !== $object->getComments()) {
                $data['comments'] = $object->getComments();
            }

            if ($object->isInitialized('excerpt') && null !== $object->getExcerpt()) {
                $data['excerpt'] = $object->getExcerpt();
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
            return [NewsDataItem::class => false];
        }
    }
}

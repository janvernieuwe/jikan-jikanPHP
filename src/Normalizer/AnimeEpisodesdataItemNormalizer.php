<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\AnimeEpisodesdataItem;
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
    class AnimeEpisodesdataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return AnimeEpisodesdataItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof AnimeEpisodesdataItem;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new AnimeEpisodesdataItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('mal_id', $data)) {
                $object->setMalId($data['mal_id']);
                unset($data['mal_id']);
            }

            if (\array_key_exists('url', $data) && null !== $data['url']) {
                $object->setUrl($data['url']);
                unset($data['url']);
            } elseif (\array_key_exists('url', $data) && null === $data['url']) {
                $object->setUrl(null);
            }

            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }

            if (\array_key_exists('title_japanese', $data) && null !== $data['title_japanese']) {
                $object->setTitleJapanese($data['title_japanese']);
                unset($data['title_japanese']);
            } elseif (\array_key_exists('title_japanese', $data) && null === $data['title_japanese']) {
                $object->setTitleJapanese(null);
            }

            if (\array_key_exists('title_romanji', $data) && null !== $data['title_romanji']) {
                $object->setTitleRomanji($data['title_romanji']);
                unset($data['title_romanji']);
            } elseif (\array_key_exists('title_romanji', $data) && null === $data['title_romanji']) {
                $object->setTitleRomanji(null);
            }

            if (\array_key_exists('duration', $data) && null !== $data['duration']) {
                $object->setDuration($data['duration']);
                unset($data['duration']);
            } elseif (\array_key_exists('duration', $data) && null === $data['duration']) {
                $object->setDuration(null);
            }

            if (\array_key_exists('aired', $data) && null !== $data['aired']) {
                $object->setAired($data['aired']);
                unset($data['aired']);
            } elseif (\array_key_exists('aired', $data) && null === $data['aired']) {
                $object->setAired(null);
            }

            if (\array_key_exists('filler', $data)) {
                $object->setFiller($data['filler']);
                unset($data['filler']);
            }

            if (\array_key_exists('recap', $data)) {
                $object->setRecap($data['recap']);
                unset($data['recap']);
            }

            if (\array_key_exists('forum_url', $data) && null !== $data['forum_url']) {
                $object->setForumUrl($data['forum_url']);
                unset($data['forum_url']);
            } elseif (\array_key_exists('forum_url', $data) && null === $data['forum_url']) {
                $object->setForumUrl(null);
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
            if ($object->isInitialized('malId') && null !== $object->getMalId()) {
                $data['mal_id'] = $object->getMalId();
            }

            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
            }

            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }

            if ($object->isInitialized('titleJapanese') && null !== $object->getTitleJapanese()) {
                $data['title_japanese'] = $object->getTitleJapanese();
            }

            if ($object->isInitialized('titleRomanji') && null !== $object->getTitleRomanji()) {
                $data['title_romanji'] = $object->getTitleRomanji();
            }

            if ($object->isInitialized('duration') && null !== $object->getDuration()) {
                $data['duration'] = $object->getDuration();
            }

            if ($object->isInitialized('aired') && null !== $object->getAired()) {
                $data['aired'] = $object->getAired();
            }

            if ($object->isInitialized('filler') && null !== $object->getFiller()) {
                $data['filler'] = $object->getFiller();
            }

            if ($object->isInitialized('recap') && null !== $object->getRecap()) {
                $data['recap'] = $object->getRecap();
            }

            if ($object->isInitialized('forumUrl') && null !== $object->getForumUrl()) {
                $data['forum_url'] = $object->getForumUrl();
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
            return [AnimeEpisodesdataItem::class => false];
        }
    }
} else {
    class AnimeEpisodesdataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return AnimeEpisodesdataItem::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof AnimeEpisodesdataItem;
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

            $object = new AnimeEpisodesdataItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }

            if (\array_key_exists('mal_id', $data)) {
                $object->setMalId($data['mal_id']);
                unset($data['mal_id']);
            }

            if (\array_key_exists('url', $data) && null !== $data['url']) {
                $object->setUrl($data['url']);
                unset($data['url']);
            } elseif (\array_key_exists('url', $data) && null === $data['url']) {
                $object->setUrl(null);
            }

            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }

            if (\array_key_exists('title_japanese', $data) && null !== $data['title_japanese']) {
                $object->setTitleJapanese($data['title_japanese']);
                unset($data['title_japanese']);
            } elseif (\array_key_exists('title_japanese', $data) && null === $data['title_japanese']) {
                $object->setTitleJapanese(null);
            }

            if (\array_key_exists('title_romanji', $data) && null !== $data['title_romanji']) {
                $object->setTitleRomanji($data['title_romanji']);
                unset($data['title_romanji']);
            } elseif (\array_key_exists('title_romanji', $data) && null === $data['title_romanji']) {
                $object->setTitleRomanji(null);
            }

            if (\array_key_exists('duration', $data) && null !== $data['duration']) {
                $object->setDuration($data['duration']);
                unset($data['duration']);
            } elseif (\array_key_exists('duration', $data) && null === $data['duration']) {
                $object->setDuration(null);
            }

            if (\array_key_exists('aired', $data) && null !== $data['aired']) {
                $object->setAired($data['aired']);
                unset($data['aired']);
            } elseif (\array_key_exists('aired', $data) && null === $data['aired']) {
                $object->setAired(null);
            }

            if (\array_key_exists('filler', $data)) {
                $object->setFiller($data['filler']);
                unset($data['filler']);
            }

            if (\array_key_exists('recap', $data)) {
                $object->setRecap($data['recap']);
                unset($data['recap']);
            }

            if (\array_key_exists('forum_url', $data) && null !== $data['forum_url']) {
                $object->setForumUrl($data['forum_url']);
                unset($data['forum_url']);
            } elseif (\array_key_exists('forum_url', $data) && null === $data['forum_url']) {
                $object->setForumUrl(null);
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
            if ($object->isInitialized('malId') && null !== $object->getMalId()) {
                $data['mal_id'] = $object->getMalId();
            }

            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
            }

            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }

            if ($object->isInitialized('titleJapanese') && null !== $object->getTitleJapanese()) {
                $data['title_japanese'] = $object->getTitleJapanese();
            }

            if ($object->isInitialized('titleRomanji') && null !== $object->getTitleRomanji()) {
                $data['title_romanji'] = $object->getTitleRomanji();
            }

            if ($object->isInitialized('duration') && null !== $object->getDuration()) {
                $data['duration'] = $object->getDuration();
            }

            if ($object->isInitialized('aired') && null !== $object->getAired()) {
                $data['aired'] = $object->getAired();
            }

            if ($object->isInitialized('filler') && null !== $object->getFiller()) {
                $data['filler'] = $object->getFiller();
            }

            if ($object->isInitialized('recap') && null !== $object->getRecap()) {
                $data['recap'] = $object->getRecap();
            }

            if ($object->isInitialized('forumUrl') && null !== $object->getForumUrl()) {
                $data['forum_url'] = $object->getForumUrl();
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
            return [AnimeEpisodesdataItem::class => false];
        }
    }
}

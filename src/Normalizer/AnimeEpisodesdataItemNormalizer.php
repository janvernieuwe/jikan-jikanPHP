<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\AnimeEpisodesdataItem;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AnimeEpisodesdataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return AnimeEpisodesdataItem::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof AnimeEpisodesdataItem;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|AnimeEpisodesdataItem
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $animeEpisodesdataItem = new AnimeEpisodesdataItem();
        if (null === $data || !\is_array($data)) {
            return $animeEpisodesdataItem;
        }

        if (\array_key_exists('mal_id', $data)) {
            $animeEpisodesdataItem->setMalId($data['mal_id']);
        }

        if (\array_key_exists('url', $data)) {
            $animeEpisodesdataItem->setUrl($data['url']);
        }

        if (\array_key_exists('title', $data)) {
            $animeEpisodesdataItem->setTitle($data['title']);
        }

        if (\array_key_exists('title_japanese', $data) && null !== $data['title_japanese']) {
            $animeEpisodesdataItem->setTitleJapanese($data['title_japanese']);
        } elseif (\array_key_exists('title_japanese', $data) && null === $data['title_japanese']) {
            $animeEpisodesdataItem->setTitleJapanese(null);
        }

        if (\array_key_exists('title_romanji', $data) && null !== $data['title_romanji']) {
            $animeEpisodesdataItem->setTitleRomanji($data['title_romanji']);
        } elseif (\array_key_exists('title_romanji', $data) && null === $data['title_romanji']) {
            $animeEpisodesdataItem->setTitleRomanji(null);
        }

        if (\array_key_exists('duration', $data) && null !== $data['duration']) {
            $animeEpisodesdataItem->setDuration($data['duration']);
        } elseif (\array_key_exists('duration', $data) && null === $data['duration']) {
            $animeEpisodesdataItem->setDuration(null);
        }

        if (\array_key_exists('aired', $data) && null !== $data['aired']) {
            $animeEpisodesdataItem->setAired($data['aired']);
        } elseif (\array_key_exists('aired', $data) && null === $data['aired']) {
            $animeEpisodesdataItem->setAired(null);
        }

        if (\array_key_exists('filler', $data)) {
            $animeEpisodesdataItem->setFiller($data['filler']);
        }

        if (\array_key_exists('recap', $data)) {
            $animeEpisodesdataItem->setRecap($data['recap']);
        }

        if (\array_key_exists('forum_url', $data) && null !== $data['forum_url']) {
            $animeEpisodesdataItem->setForumUrl($data['forum_url']);
        } elseif (\array_key_exists('forum_url', $data) && null === $data['forum_url']) {
            $animeEpisodesdataItem->setForumUrl(null);
        }

        return $animeEpisodesdataItem;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = []): array
    {
        $data = [];
        if (null !== $object->getMalId()) {
            $data['mal_id'] = $object->getMalId();
        }

        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }

        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }

        if (null !== $object->getTitleJapanese()) {
            $data['title_japanese'] = $object->getTitleJapanese();
        }

        if (null !== $object->getTitleRomanji()) {
            $data['title_romanji'] = $object->getTitleRomanji();
        }

        if (null !== $object->getDuration()) {
            $data['duration'] = $object->getDuration();
        }

        if (null !== $object->getAired()) {
            $data['aired'] = $object->getAired();
        }

        if (null !== $object->getFiller()) {
            $data['filler'] = $object->getFiller();
        }

        if (null !== $object->getRecap()) {
            $data['recap'] = $object->getRecap();
        }

        if (null !== $object->getForumUrl()) {
            $data['forum_url'] = $object->getForumUrl();
        }

        return $data;
    }
}

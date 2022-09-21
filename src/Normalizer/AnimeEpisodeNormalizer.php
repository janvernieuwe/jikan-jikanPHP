<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\AnimeEpisode;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AnimeEpisodeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return AnimeEpisode::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof AnimeEpisode;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|AnimeEpisode
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $animeEpisode = new AnimeEpisode();
        if (null === $data || !\is_array($data)) {
            return $animeEpisode;
        }

        if (\array_key_exists('mal_id', $data)) {
            $animeEpisode->setMalId($data['mal_id']);
        }

        if (\array_key_exists('url', $data)) {
            $animeEpisode->setUrl($data['url']);
        }

        if (\array_key_exists('title', $data)) {
            $animeEpisode->setTitle($data['title']);
        }

        if (\array_key_exists('title_japanese', $data) && null !== $data['title_japanese']) {
            $animeEpisode->setTitleJapanese($data['title_japanese']);
        } elseif (\array_key_exists('title_japanese', $data) && null === $data['title_japanese']) {
            $animeEpisode->setTitleJapanese(null);
        }

        if (\array_key_exists('title_romanji', $data) && null !== $data['title_romanji']) {
            $animeEpisode->setTitleRomanji($data['title_romanji']);
        } elseif (\array_key_exists('title_romanji', $data) && null === $data['title_romanji']) {
            $animeEpisode->setTitleRomanji(null);
        }

        if (\array_key_exists('duration', $data) && null !== $data['duration']) {
            $animeEpisode->setDuration($data['duration']);
        } elseif (\array_key_exists('duration', $data) && null === $data['duration']) {
            $animeEpisode->setDuration(null);
        }

        if (\array_key_exists('aired', $data) && null !== $data['aired']) {
            $animeEpisode->setAired($data['aired']);
        } elseif (\array_key_exists('aired', $data) && null === $data['aired']) {
            $animeEpisode->setAired(null);
        }

        if (\array_key_exists('filler', $data)) {
            $animeEpisode->setFiller($data['filler']);
        }

        if (\array_key_exists('recap', $data)) {
            $animeEpisode->setRecap($data['recap']);
        }

        if (\array_key_exists('synopsis', $data) && null !== $data['synopsis']) {
            $animeEpisode->setSynopsis($data['synopsis']);
        } elseif (\array_key_exists('synopsis', $data) && null === $data['synopsis']) {
            $animeEpisode->setSynopsis(null);
        }

        return $animeEpisode;
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

        if (null !== $object->getSynopsis()) {
            $data['synopsis'] = $object->getSynopsis();
        }

        return $data;
    }
}

<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AnimeFullNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Jikan\\JikanPHP\\Model\\AnimeFull' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && 'Jikan\\JikanPHP\\Model\\AnimeFull' === get_class($data);
    }

    /**
     * @param mixed      $data
     * @param mixed      $class
     * @param null|mixed $format
     *
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Jikan\JikanPHP\Model\AnimeFull();
        if (\array_key_exists('score', $data) && \is_int($data['score'])) {
            $data['score'] = (float) $data['score'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('mal_id', $data)) {
            $object->setMalId($data['mal_id']);
        }
        if (\array_key_exists('url', $data)) {
            $object->setUrl($data['url']);
        }
        if (\array_key_exists('images', $data)) {
            $object->setImages($this->denormalizer->denormalize($data['images'], 'Jikan\\JikanPHP\\Model\\AnimeImages', 'json', $context));
        }
        if (\array_key_exists('trailer', $data)) {
            $object->setTrailer($this->denormalizer->denormalize($data['trailer'], 'Jikan\\JikanPHP\\Model\\TrailerBase', 'json', $context));
        }
        if (\array_key_exists('approved', $data)) {
            $object->setApproved($data['approved']);
        }
        if (\array_key_exists('titles', $data)) {
            $values = [];
            foreach ($data['titles'] as $value) {
                $values[] = $value;
            }
            $object->setTitles($values);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (\array_key_exists('title_english', $data) && null !== $data['title_english']) {
            $object->setTitleEnglish($data['title_english']);
        } elseif (\array_key_exists('title_english', $data) && null === $data['title_english']) {
            $object->setTitleEnglish(null);
        }
        if (\array_key_exists('title_japanese', $data) && null !== $data['title_japanese']) {
            $object->setTitleJapanese($data['title_japanese']);
        } elseif (\array_key_exists('title_japanese', $data) && null === $data['title_japanese']) {
            $object->setTitleJapanese(null);
        }
        if (\array_key_exists('title_synonyms', $data)) {
            $values_1 = [];
            foreach ($data['title_synonyms'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setTitleSynonyms($values_1);
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }
        if (\array_key_exists('source', $data) && null !== $data['source']) {
            $object->setSource($data['source']);
        } elseif (\array_key_exists('source', $data) && null === $data['source']) {
            $object->setSource(null);
        }
        if (\array_key_exists('episodes', $data) && null !== $data['episodes']) {
            $object->setEpisodes($data['episodes']);
        } elseif (\array_key_exists('episodes', $data) && null === $data['episodes']) {
            $object->setEpisodes(null);
        }
        if (\array_key_exists('status', $data) && null !== $data['status']) {
            $object->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && null === $data['status']) {
            $object->setStatus(null);
        }
        if (\array_key_exists('airing', $data)) {
            $object->setAiring($data['airing']);
        }
        if (\array_key_exists('aired', $data)) {
            $object->setAired($this->denormalizer->denormalize($data['aired'], 'Jikan\\JikanPHP\\Model\\Daterange', 'json', $context));
        }
        if (\array_key_exists('duration', $data) && null !== $data['duration']) {
            $object->setDuration($data['duration']);
        } elseif (\array_key_exists('duration', $data) && null === $data['duration']) {
            $object->setDuration(null);
        }
        if (\array_key_exists('rating', $data) && null !== $data['rating']) {
            $object->setRating($data['rating']);
        } elseif (\array_key_exists('rating', $data) && null === $data['rating']) {
            $object->setRating(null);
        }
        if (\array_key_exists('score', $data) && null !== $data['score']) {
            $object->setScore($data['score']);
        } elseif (\array_key_exists('score', $data) && null === $data['score']) {
            $object->setScore(null);
        }
        if (\array_key_exists('scored_by', $data) && null !== $data['scored_by']) {
            $object->setScoredBy($data['scored_by']);
        } elseif (\array_key_exists('scored_by', $data) && null === $data['scored_by']) {
            $object->setScoredBy(null);
        }
        if (\array_key_exists('rank', $data) && null !== $data['rank']) {
            $object->setRank($data['rank']);
        } elseif (\array_key_exists('rank', $data) && null === $data['rank']) {
            $object->setRank(null);
        }
        if (\array_key_exists('popularity', $data) && null !== $data['popularity']) {
            $object->setPopularity($data['popularity']);
        } elseif (\array_key_exists('popularity', $data) && null === $data['popularity']) {
            $object->setPopularity(null);
        }
        if (\array_key_exists('members', $data) && null !== $data['members']) {
            $object->setMembers($data['members']);
        } elseif (\array_key_exists('members', $data) && null === $data['members']) {
            $object->setMembers(null);
        }
        if (\array_key_exists('favorites', $data) && null !== $data['favorites']) {
            $object->setFavorites($data['favorites']);
        } elseif (\array_key_exists('favorites', $data) && null === $data['favorites']) {
            $object->setFavorites(null);
        }
        if (\array_key_exists('synopsis', $data) && null !== $data['synopsis']) {
            $object->setSynopsis($data['synopsis']);
        } elseif (\array_key_exists('synopsis', $data) && null === $data['synopsis']) {
            $object->setSynopsis(null);
        }
        if (\array_key_exists('background', $data) && null !== $data['background']) {
            $object->setBackground($data['background']);
        } elseif (\array_key_exists('background', $data) && null === $data['background']) {
            $object->setBackground(null);
        }
        if (\array_key_exists('season', $data) && null !== $data['season']) {
            $object->setSeason($data['season']);
        } elseif (\array_key_exists('season', $data) && null === $data['season']) {
            $object->setSeason(null);
        }
        if (\array_key_exists('year', $data) && null !== $data['year']) {
            $object->setYear($data['year']);
        } elseif (\array_key_exists('year', $data) && null === $data['year']) {
            $object->setYear(null);
        }
        if (\array_key_exists('broadcast', $data)) {
            $object->setBroadcast($this->denormalizer->denormalize($data['broadcast'], 'Jikan\\JikanPHP\\Model\\Broadcast', 'json', $context));
        }
        if (\array_key_exists('producers', $data)) {
            $values_2 = [];
            foreach ($data['producers'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Jikan\\JikanPHP\\Model\\MalUrl', 'json', $context);
            }
            $object->setProducers($values_2);
        }
        if (\array_key_exists('licensors', $data)) {
            $values_3 = [];
            foreach ($data['licensors'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Jikan\\JikanPHP\\Model\\MalUrl', 'json', $context);
            }
            $object->setLicensors($values_3);
        }
        if (\array_key_exists('studios', $data)) {
            $values_4 = [];
            foreach ($data['studios'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Jikan\\JikanPHP\\Model\\MalUrl', 'json', $context);
            }
            $object->setStudios($values_4);
        }
        if (\array_key_exists('genres', $data)) {
            $values_5 = [];
            foreach ($data['genres'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Jikan\\JikanPHP\\Model\\MalUrl', 'json', $context);
            }
            $object->setGenres($values_5);
        }
        if (\array_key_exists('explicit_genres', $data)) {
            $values_6 = [];
            foreach ($data['explicit_genres'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'Jikan\\JikanPHP\\Model\\MalUrl', 'json', $context);
            }
            $object->setExplicitGenres($values_6);
        }
        if (\array_key_exists('themes', $data)) {
            $values_7 = [];
            foreach ($data['themes'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'Jikan\\JikanPHP\\Model\\MalUrl', 'json', $context);
            }
            $object->setThemes($values_7);
        }
        if (\array_key_exists('demographics', $data)) {
            $values_8 = [];
            foreach ($data['demographics'] as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, 'Jikan\\JikanPHP\\Model\\MalUrl', 'json', $context);
            }
            $object->setDemographics($values_8);
        }
        if (\array_key_exists('relations', $data)) {
            $values_9 = [];
            foreach ($data['relations'] as $value_9) {
                $values_9[] = $this->denormalizer->denormalize($value_9, 'Jikan\\JikanPHP\\Model\\AnimeFullRelationsItem', 'json', $context);
            }
            $object->setRelations($values_9);
        }
        if (\array_key_exists('theme', $data)) {
            $object->setTheme($this->denormalizer->denormalize($data['theme'], 'Jikan\\JikanPHP\\Model\\AnimeFullTheme', 'json', $context));
        }
        if (\array_key_exists('external', $data)) {
            $values_10 = [];
            foreach ($data['external'] as $value_10) {
                $values_10[] = $this->denormalizer->denormalize($value_10, 'Jikan\\JikanPHP\\Model\\AnimeFullExternalItem', 'json', $context);
            }
            $object->setExternal($values_10);
        }
        if (\array_key_exists('streaming', $data)) {
            $values_11 = [];
            foreach ($data['streaming'] as $value_11) {
                $values_11[] = $this->denormalizer->denormalize($value_11, 'Jikan\\JikanPHP\\Model\\AnimeFullStreamingItem', 'json', $context);
            }
            $object->setStreaming($values_11);
        }

        return $object;
    }

    /**
     * @param mixed      $object
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getMalId()) {
            $data['mal_id'] = $object->getMalId();
        }
        if (null !== $object->getUrl()) {
            $data['url'] = $object->getUrl();
        }
        if (null !== $object->getImages()) {
            $data['images'] = $this->normalizer->normalize($object->getImages(), 'json', $context);
        }
        if (null !== $object->getTrailer()) {
            $data['trailer'] = $this->normalizer->normalize($object->getTrailer(), 'json', $context);
        }
        if (null !== $object->getApproved()) {
            $data['approved'] = $object->getApproved();
        }
        if (null !== $object->getTitles()) {
            $values = [];
            foreach ($object->getTitles() as $value) {
                $values[] = $value;
            }
            $data['titles'] = $values;
        }
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        if (null !== $object->getTitleEnglish()) {
            $data['title_english'] = $object->getTitleEnglish();
        }
        if (null !== $object->getTitleJapanese()) {
            $data['title_japanese'] = $object->getTitleJapanese();
        }
        if (null !== $object->getTitleSynonyms()) {
            $values_1 = [];
            foreach ($object->getTitleSynonyms() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['title_synonyms'] = $values_1;
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getSource()) {
            $data['source'] = $object->getSource();
        }
        if (null !== $object->getEpisodes()) {
            $data['episodes'] = $object->getEpisodes();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getAiring()) {
            $data['airing'] = $object->getAiring();
        }
        if (null !== $object->getAired()) {
            $data['aired'] = $this->normalizer->normalize($object->getAired(), 'json', $context);
        }
        if (null !== $object->getDuration()) {
            $data['duration'] = $object->getDuration();
        }
        if (null !== $object->getRating()) {
            $data['rating'] = $object->getRating();
        }
        if (null !== $object->getScore()) {
            $data['score'] = $object->getScore();
        }
        if (null !== $object->getScoredBy()) {
            $data['scored_by'] = $object->getScoredBy();
        }
        if (null !== $object->getRank()) {
            $data['rank'] = $object->getRank();
        }
        if (null !== $object->getPopularity()) {
            $data['popularity'] = $object->getPopularity();
        }
        if (null !== $object->getMembers()) {
            $data['members'] = $object->getMembers();
        }
        if (null !== $object->getFavorites()) {
            $data['favorites'] = $object->getFavorites();
        }
        if (null !== $object->getSynopsis()) {
            $data['synopsis'] = $object->getSynopsis();
        }
        if (null !== $object->getBackground()) {
            $data['background'] = $object->getBackground();
        }
        if (null !== $object->getSeason()) {
            $data['season'] = $object->getSeason();
        }
        if (null !== $object->getYear()) {
            $data['year'] = $object->getYear();
        }
        if (null !== $object->getBroadcast()) {
            $data['broadcast'] = $this->normalizer->normalize($object->getBroadcast(), 'json', $context);
        }
        if (null !== $object->getProducers()) {
            $values_2 = [];
            foreach ($object->getProducers() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['producers'] = $values_2;
        }
        if (null !== $object->getLicensors()) {
            $values_3 = [];
            foreach ($object->getLicensors() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['licensors'] = $values_3;
        }
        if (null !== $object->getStudios()) {
            $values_4 = [];
            foreach ($object->getStudios() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['studios'] = $values_4;
        }
        if (null !== $object->getGenres()) {
            $values_5 = [];
            foreach ($object->getGenres() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['genres'] = $values_5;
        }
        if (null !== $object->getExplicitGenres()) {
            $values_6 = [];
            foreach ($object->getExplicitGenres() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data['explicit_genres'] = $values_6;
        }
        if (null !== $object->getThemes()) {
            $values_7 = [];
            foreach ($object->getThemes() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data['themes'] = $values_7;
        }
        if (null !== $object->getDemographics()) {
            $values_8 = [];
            foreach ($object->getDemographics() as $value_8) {
                $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
            }
            $data['demographics'] = $values_8;
        }
        if (null !== $object->getRelations()) {
            $values_9 = [];
            foreach ($object->getRelations() as $value_9) {
                $values_9[] = $this->normalizer->normalize($value_9, 'json', $context);
            }
            $data['relations'] = $values_9;
        }
        if (null !== $object->getTheme()) {
            $data['theme'] = $this->normalizer->normalize($object->getTheme(), 'json', $context);
        }
        if (null !== $object->getExternal()) {
            $values_10 = [];
            foreach ($object->getExternal() as $value_10) {
                $values_10[] = $this->normalizer->normalize($value_10, 'json', $context);
            }
            $data['external'] = $values_10;
        }
        if (null !== $object->getStreaming()) {
            $values_11 = [];
            foreach ($object->getStreaming() as $value_11) {
                $values_11[] = $this->normalizer->normalize($value_11, 'json', $context);
            }
            $data['streaming'] = $values_11;
        }

        return $data;
    }
}

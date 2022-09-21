<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\AnimeFull;
use Jikan\JikanPHP\Model\AnimeFullExternalItem;
use Jikan\JikanPHP\Model\AnimeFullRelationsItem;
use Jikan\JikanPHP\Model\AnimeFullStreamingItem;
use Jikan\JikanPHP\Model\AnimeFullTheme;
use Jikan\JikanPHP\Model\AnimeImages;
use Jikan\JikanPHP\Model\Broadcast;
use Jikan\JikanPHP\Model\Daterange;
use Jikan\JikanPHP\Model\MalUrl;
use Jikan\JikanPHP\Model\TrailerBase;
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
        return AnimeFull::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof AnimeFull;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|AnimeFull
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $animeFull = new AnimeFull();
        if (\array_key_exists('score', $data) && \is_int($data['score'])) {
            $data['score'] = (float) $data['score'];
        }

        if (null === $data || !\is_array($data)) {
            return $animeFull;
        }

        if (\array_key_exists('mal_id', $data)) {
            $animeFull->setMalId($data['mal_id']);
        }

        if (\array_key_exists('url', $data)) {
            $animeFull->setUrl($data['url']);
        }

        if (\array_key_exists('images', $data)) {
            $animeFull->setImages($this->denormalizer->denormalize($data['images'], AnimeImages::class, 'json', $context));
        }

        if (\array_key_exists('trailer', $data)) {
            $animeFull->setTrailer($this->denormalizer->denormalize($data['trailer'], TrailerBase::class, 'json', $context));
        }

        if (\array_key_exists('approved', $data)) {
            $animeFull->setApproved($data['approved']);
        }

        if (\array_key_exists('titles', $data)) {
            $values = [];
            foreach ($data['titles'] as $value) {
                $values[] = $value;
            }

            $animeFull->setTitles($values);
        }

        if (\array_key_exists('title', $data)) {
            $animeFull->setTitle($data['title']);
        }

        if (\array_key_exists('title_english', $data) && null !== $data['title_english']) {
            $animeFull->setTitleEnglish($data['title_english']);
        } elseif (\array_key_exists('title_english', $data) && null === $data['title_english']) {
            $animeFull->setTitleEnglish(null);
        }

        if (\array_key_exists('title_japanese', $data) && null !== $data['title_japanese']) {
            $animeFull->setTitleJapanese($data['title_japanese']);
        } elseif (\array_key_exists('title_japanese', $data) && null === $data['title_japanese']) {
            $animeFull->setTitleJapanese(null);
        }

        if (\array_key_exists('title_synonyms', $data)) {
            $values_1 = [];
            foreach ($data['title_synonyms'] as $value_1) {
                $values_1[] = $value_1;
            }

            $animeFull->setTitleSynonyms($values_1);
        }

        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $animeFull->setType($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $animeFull->setType(null);
        }

        if (\array_key_exists('source', $data) && null !== $data['source']) {
            $animeFull->setSource($data['source']);
        } elseif (\array_key_exists('source', $data) && null === $data['source']) {
            $animeFull->setSource(null);
        }

        if (\array_key_exists('episodes', $data) && null !== $data['episodes']) {
            $animeFull->setEpisodes($data['episodes']);
        } elseif (\array_key_exists('episodes', $data) && null === $data['episodes']) {
            $animeFull->setEpisodes(null);
        }

        if (\array_key_exists('status', $data) && null !== $data['status']) {
            $animeFull->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && null === $data['status']) {
            $animeFull->setStatus(null);
        }

        if (\array_key_exists('airing', $data)) {
            $animeFull->setAiring($data['airing']);
        }

        if (\array_key_exists('aired', $data)) {
            $animeFull->setAired($this->denormalizer->denormalize($data['aired'], Daterange::class, 'json', $context));
        }

        if (\array_key_exists('duration', $data) && null !== $data['duration']) {
            $animeFull->setDuration($data['duration']);
        } elseif (\array_key_exists('duration', $data) && null === $data['duration']) {
            $animeFull->setDuration(null);
        }

        if (\array_key_exists('rating', $data) && null !== $data['rating']) {
            $animeFull->setRating($data['rating']);
        } elseif (\array_key_exists('rating', $data) && null === $data['rating']) {
            $animeFull->setRating(null);
        }

        if (\array_key_exists('score', $data) && null !== $data['score']) {
            $animeFull->setScore($data['score']);
        } elseif (\array_key_exists('score', $data) && null === $data['score']) {
            $animeFull->setScore(null);
        }

        if (\array_key_exists('scored_by', $data) && null !== $data['scored_by']) {
            $animeFull->setScoredBy($data['scored_by']);
        } elseif (\array_key_exists('scored_by', $data) && null === $data['scored_by']) {
            $animeFull->setScoredBy(null);
        }

        if (\array_key_exists('rank', $data) && null !== $data['rank']) {
            $animeFull->setRank($data['rank']);
        } elseif (\array_key_exists('rank', $data) && null === $data['rank']) {
            $animeFull->setRank(null);
        }

        if (\array_key_exists('popularity', $data) && null !== $data['popularity']) {
            $animeFull->setPopularity($data['popularity']);
        } elseif (\array_key_exists('popularity', $data) && null === $data['popularity']) {
            $animeFull->setPopularity(null);
        }

        if (\array_key_exists('members', $data) && null !== $data['members']) {
            $animeFull->setMembers($data['members']);
        } elseif (\array_key_exists('members', $data) && null === $data['members']) {
            $animeFull->setMembers(null);
        }

        if (\array_key_exists('favorites', $data) && null !== $data['favorites']) {
            $animeFull->setFavorites($data['favorites']);
        } elseif (\array_key_exists('favorites', $data) && null === $data['favorites']) {
            $animeFull->setFavorites(null);
        }

        if (\array_key_exists('synopsis', $data) && null !== $data['synopsis']) {
            $animeFull->setSynopsis($data['synopsis']);
        } elseif (\array_key_exists('synopsis', $data) && null === $data['synopsis']) {
            $animeFull->setSynopsis(null);
        }

        if (\array_key_exists('background', $data) && null !== $data['background']) {
            $animeFull->setBackground($data['background']);
        } elseif (\array_key_exists('background', $data) && null === $data['background']) {
            $animeFull->setBackground(null);
        }

        if (\array_key_exists('season', $data) && null !== $data['season']) {
            $animeFull->setSeason($data['season']);
        } elseif (\array_key_exists('season', $data) && null === $data['season']) {
            $animeFull->setSeason(null);
        }

        if (\array_key_exists('year', $data) && null !== $data['year']) {
            $animeFull->setYear($data['year']);
        } elseif (\array_key_exists('year', $data) && null === $data['year']) {
            $animeFull->setYear(null);
        }

        if (\array_key_exists('broadcast', $data)) {
            $animeFull->setBroadcast($this->denormalizer->denormalize($data['broadcast'], Broadcast::class, 'json', $context));
        }

        if (\array_key_exists('producers', $data)) {
            $values_2 = [];
            foreach ($data['producers'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, MalUrl::class, 'json', $context);
            }

            $animeFull->setProducers($values_2);
        }

        if (\array_key_exists('licensors', $data)) {
            $values_3 = [];
            foreach ($data['licensors'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, MalUrl::class, 'json', $context);
            }

            $animeFull->setLicensors($values_3);
        }

        if (\array_key_exists('studios', $data)) {
            $values_4 = [];
            foreach ($data['studios'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, MalUrl::class, 'json', $context);
            }

            $animeFull->setStudios($values_4);
        }

        if (\array_key_exists('genres', $data)) {
            $values_5 = [];
            foreach ($data['genres'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, MalUrl::class, 'json', $context);
            }

            $animeFull->setGenres($values_5);
        }

        if (\array_key_exists('explicit_genres', $data)) {
            $values_6 = [];
            foreach ($data['explicit_genres'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, MalUrl::class, 'json', $context);
            }

            $animeFull->setExplicitGenres($values_6);
        }

        if (\array_key_exists('themes', $data)) {
            $values_7 = [];
            foreach ($data['themes'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, MalUrl::class, 'json', $context);
            }

            $animeFull->setThemes($values_7);
        }

        if (\array_key_exists('demographics', $data)) {
            $values_8 = [];
            foreach ($data['demographics'] as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, MalUrl::class, 'json', $context);
            }

            $animeFull->setDemographics($values_8);
        }

        if (\array_key_exists('relations', $data)) {
            $values_9 = [];
            foreach ($data['relations'] as $value_9) {
                $values_9[] = $this->denormalizer->denormalize($value_9, AnimeFullRelationsItem::class, 'json', $context);
            }

            $animeFull->setRelations($values_9);
        }

        if (\array_key_exists('theme', $data)) {
            $animeFull->setTheme($this->denormalizer->denormalize($data['theme'], AnimeFullTheme::class, 'json', $context));
        }

        if (\array_key_exists('external', $data)) {
            $values_10 = [];
            foreach ($data['external'] as $value_10) {
                $values_10[] = $this->denormalizer->denormalize($value_10, AnimeFullExternalItem::class, 'json', $context);
            }

            $animeFull->setExternal($values_10);
        }

        if (\array_key_exists('streaming', $data)) {
            $values_11 = [];
            foreach ($data['streaming'] as $value_11) {
                $values_11[] = $this->denormalizer->denormalize($value_11, AnimeFullStreamingItem::class, 'json', $context);
            }

            $animeFull->setStreaming($values_11);
        }

        return $animeFull;
    }

    /**
     * @param null|mixed $format
     *
     * @return array|string|int|float|bool|ArrayObject|null
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
            foreach ($object->getTitles() as $title) {
                $values[] = $title;
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
            foreach ($object->getTitleSynonyms() as $titleSynonym) {
                $values_1[] = $titleSynonym;
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
            foreach ($object->getProducers() as $producer) {
                $values_2[] = $this->normalizer->normalize($producer, 'json', $context);
            }

            $data['producers'] = $values_2;
        }

        if (null !== $object->getLicensors()) {
            $values_3 = [];
            foreach ($object->getLicensors() as $licensor) {
                $values_3[] = $this->normalizer->normalize($licensor, 'json', $context);
            }

            $data['licensors'] = $values_3;
        }

        if (null !== $object->getStudios()) {
            $values_4 = [];
            foreach ($object->getStudios() as $studio) {
                $values_4[] = $this->normalizer->normalize($studio, 'json', $context);
            }

            $data['studios'] = $values_4;
        }

        if (null !== $object->getGenres()) {
            $values_5 = [];
            foreach ($object->getGenres() as $genre) {
                $values_5[] = $this->normalizer->normalize($genre, 'json', $context);
            }

            $data['genres'] = $values_5;
        }

        if (null !== $object->getExplicitGenres()) {
            $values_6 = [];
            foreach ($object->getExplicitGenres() as $explicitGenre) {
                $values_6[] = $this->normalizer->normalize($explicitGenre, 'json', $context);
            }

            $data['explicit_genres'] = $values_6;
        }

        if (null !== $object->getThemes()) {
            $values_7 = [];
            foreach ($object->getThemes() as $theme) {
                $values_7[] = $this->normalizer->normalize($theme, 'json', $context);
            }

            $data['themes'] = $values_7;
        }

        if (null !== $object->getDemographics()) {
            $values_8 = [];
            foreach ($object->getDemographics() as $demographic) {
                $values_8[] = $this->normalizer->normalize($demographic, 'json', $context);
            }

            $data['demographics'] = $values_8;
        }

        if (null !== $object->getRelations()) {
            $values_9 = [];
            foreach ($object->getRelations() as $relation) {
                $values_9[] = $this->normalizer->normalize($relation, 'json', $context);
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

<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\Anime;
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

class AnimeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return Anime::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof Anime;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|Anime
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $anime = new Anime();
        if (\array_key_exists('score', $data) && \is_int($data['score'])) {
            $data['score'] = (float) $data['score'];
        }

        if (null === $data || !\is_array($data)) {
            return $anime;
        }

        if (\array_key_exists('mal_id', $data)) {
            $anime->setMalId($data['mal_id']);
        }

        if (\array_key_exists('url', $data)) {
            $anime->setUrl($data['url']);
        }

        if (\array_key_exists('images', $data)) {
            $anime->setImages($this->denormalizer->denormalize($data['images'], AnimeImages::class, 'json', $context));
        }

        if (\array_key_exists('trailer', $data)) {
            $anime->setTrailer($this->denormalizer->denormalize($data['trailer'], TrailerBase::class, 'json', $context));
        }

        if (\array_key_exists('approved', $data)) {
            $anime->setApproved($data['approved']);
        }

        if (\array_key_exists('titles', $data)) {
            $values = [];
            foreach ($data['titles'] as $value) {
                $values[] = $value;
            }

            $anime->setTitles($values);
        }

        if (\array_key_exists('title', $data)) {
            $anime->setTitle($data['title']);
        }

        if (\array_key_exists('title_english', $data) && null !== $data['title_english']) {
            $anime->setTitleEnglish($data['title_english']);
        } elseif (\array_key_exists('title_english', $data) && null === $data['title_english']) {
            $anime->setTitleEnglish(null);
        }

        if (\array_key_exists('title_japanese', $data) && null !== $data['title_japanese']) {
            $anime->setTitleJapanese($data['title_japanese']);
        } elseif (\array_key_exists('title_japanese', $data) && null === $data['title_japanese']) {
            $anime->setTitleJapanese(null);
        }

        if (\array_key_exists('title_synonyms', $data)) {
            $values_1 = [];
            foreach ($data['title_synonyms'] as $value_1) {
                $values_1[] = $value_1;
            }

            $anime->setTitleSynonyms($values_1);
        }

        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $anime->setType($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $anime->setType(null);
        }

        if (\array_key_exists('source', $data) && null !== $data['source']) {
            $anime->setSource($data['source']);
        } elseif (\array_key_exists('source', $data) && null === $data['source']) {
            $anime->setSource(null);
        }

        if (\array_key_exists('episodes', $data) && null !== $data['episodes']) {
            $anime->setEpisodes($data['episodes']);
        } elseif (\array_key_exists('episodes', $data) && null === $data['episodes']) {
            $anime->setEpisodes(null);
        }

        if (\array_key_exists('status', $data) && null !== $data['status']) {
            $anime->setStatus($data['status']);
        } elseif (\array_key_exists('status', $data) && null === $data['status']) {
            $anime->setStatus(null);
        }

        if (\array_key_exists('airing', $data)) {
            $anime->setAiring($data['airing']);
        }

        if (\array_key_exists('aired', $data)) {
            $anime->setAired($this->denormalizer->denormalize($data['aired'], Daterange::class, 'json', $context));
        }

        if (\array_key_exists('duration', $data) && null !== $data['duration']) {
            $anime->setDuration($data['duration']);
        } elseif (\array_key_exists('duration', $data) && null === $data['duration']) {
            $anime->setDuration(null);
        }

        if (\array_key_exists('rating', $data) && null !== $data['rating']) {
            $anime->setRating($data['rating']);
        } elseif (\array_key_exists('rating', $data) && null === $data['rating']) {
            $anime->setRating(null);
        }

        if (\array_key_exists('score', $data) && null !== $data['score']) {
            $anime->setScore($data['score']);
        } elseif (\array_key_exists('score', $data) && null === $data['score']) {
            $anime->setScore(null);
        }

        if (\array_key_exists('scored_by', $data) && null !== $data['scored_by']) {
            $anime->setScoredBy($data['scored_by']);
        } elseif (\array_key_exists('scored_by', $data) && null === $data['scored_by']) {
            $anime->setScoredBy(null);
        }

        if (\array_key_exists('rank', $data) && null !== $data['rank']) {
            $anime->setRank($data['rank']);
        } elseif (\array_key_exists('rank', $data) && null === $data['rank']) {
            $anime->setRank(null);
        }

        if (\array_key_exists('popularity', $data) && null !== $data['popularity']) {
            $anime->setPopularity($data['popularity']);
        } elseif (\array_key_exists('popularity', $data) && null === $data['popularity']) {
            $anime->setPopularity(null);
        }

        if (\array_key_exists('members', $data) && null !== $data['members']) {
            $anime->setMembers($data['members']);
        } elseif (\array_key_exists('members', $data) && null === $data['members']) {
            $anime->setMembers(null);
        }

        if (\array_key_exists('favorites', $data) && null !== $data['favorites']) {
            $anime->setFavorites($data['favorites']);
        } elseif (\array_key_exists('favorites', $data) && null === $data['favorites']) {
            $anime->setFavorites(null);
        }

        if (\array_key_exists('synopsis', $data) && null !== $data['synopsis']) {
            $anime->setSynopsis($data['synopsis']);
        } elseif (\array_key_exists('synopsis', $data) && null === $data['synopsis']) {
            $anime->setSynopsis(null);
        }

        if (\array_key_exists('background', $data) && null !== $data['background']) {
            $anime->setBackground($data['background']);
        } elseif (\array_key_exists('background', $data) && null === $data['background']) {
            $anime->setBackground(null);
        }

        if (\array_key_exists('season', $data) && null !== $data['season']) {
            $anime->setSeason($data['season']);
        } elseif (\array_key_exists('season', $data) && null === $data['season']) {
            $anime->setSeason(null);
        }

        if (\array_key_exists('year', $data) && null !== $data['year']) {
            $anime->setYear($data['year']);
        } elseif (\array_key_exists('year', $data) && null === $data['year']) {
            $anime->setYear(null);
        }

        if (\array_key_exists('broadcast', $data)) {
            $anime->setBroadcast($this->denormalizer->denormalize($data['broadcast'], Broadcast::class, 'json', $context));
        }

        if (\array_key_exists('producers', $data)) {
            $values_2 = [];
            foreach ($data['producers'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, MalUrl::class, 'json', $context);
            }

            $anime->setProducers($values_2);
        }

        if (\array_key_exists('licensors', $data)) {
            $values_3 = [];
            foreach ($data['licensors'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, MalUrl::class, 'json', $context);
            }

            $anime->setLicensors($values_3);
        }

        if (\array_key_exists('studios', $data)) {
            $values_4 = [];
            foreach ($data['studios'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, MalUrl::class, 'json', $context);
            }

            $anime->setStudios($values_4);
        }

        if (\array_key_exists('genres', $data)) {
            $values_5 = [];
            foreach ($data['genres'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, MalUrl::class, 'json', $context);
            }

            $anime->setGenres($values_5);
        }

        if (\array_key_exists('explicit_genres', $data)) {
            $values_6 = [];
            foreach ($data['explicit_genres'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, MalUrl::class, 'json', $context);
            }

            $anime->setExplicitGenres($values_6);
        }

        if (\array_key_exists('themes', $data)) {
            $values_7 = [];
            foreach ($data['themes'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, MalUrl::class, 'json', $context);
            }

            $anime->setThemes($values_7);
        }

        if (\array_key_exists('demographics', $data)) {
            $values_8 = [];
            foreach ($data['demographics'] as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, MalUrl::class, 'json', $context);
            }

            $anime->setDemographics($values_8);
        }

        return $anime;
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

        return $data;
    }
}

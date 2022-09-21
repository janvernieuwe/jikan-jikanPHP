<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

use ArrayObject;
use Jane\Component\JsonSchemaRuntime\Reference;
use Jikan\JikanPHP\Model\Daterange;
use Jikan\JikanPHP\Model\MalUrl;
use Jikan\JikanPHP\Model\MangaFull;
use Jikan\JikanPHP\Model\MangaFullExternalItem;
use Jikan\JikanPHP\Model\MangaFullRelationsItem;
use Jikan\JikanPHP\Model\MangaImages;
use Jikan\JikanPHP\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class MangaFullNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return MangaFull::class === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && $data instanceof MangaFull;
    }

    /**
     * @param null|mixed $format
     */
    public function denormalize($data, $class, $format = null, array $context = []): Reference|MangaFull
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }

        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }

        $mangaFull = new MangaFull();
        if (\array_key_exists('score', $data) && \is_int($data['score'])) {
            $data['score'] = (float) $data['score'];
        }

        if (null === $data || !\is_array($data)) {
            return $mangaFull;
        }

        if (\array_key_exists('mal_id', $data)) {
            $mangaFull->setMalId($data['mal_id']);
        }

        if (\array_key_exists('url', $data)) {
            $mangaFull->setUrl($data['url']);
        }

        if (\array_key_exists('images', $data)) {
            $mangaFull->setImages($this->denormalizer->denormalize($data['images'], MangaImages::class, 'json', $context));
        }

        if (\array_key_exists('approved', $data)) {
            $mangaFull->setApproved($data['approved']);
        }

        if (\array_key_exists('titles', $data)) {
            $values = [];
            foreach ($data['titles'] as $value) {
                $values[] = $value;
            }

            $mangaFull->setTitles($values);
        }

        if (\array_key_exists('title', $data)) {
            $mangaFull->setTitle($data['title']);
        }

        if (\array_key_exists('title_english', $data) && null !== $data['title_english']) {
            $mangaFull->setTitleEnglish($data['title_english']);
        } elseif (\array_key_exists('title_english', $data) && null === $data['title_english']) {
            $mangaFull->setTitleEnglish(null);
        }

        if (\array_key_exists('title_japanese', $data) && null !== $data['title_japanese']) {
            $mangaFull->setTitleJapanese($data['title_japanese']);
        } elseif (\array_key_exists('title_japanese', $data) && null === $data['title_japanese']) {
            $mangaFull->setTitleJapanese(null);
        }

        if (\array_key_exists('title_synonyms', $data)) {
            $values_1 = [];
            foreach ($data['title_synonyms'] as $value_1) {
                $values_1[] = $value_1;
            }

            $mangaFull->setTitleSynonyms($values_1);
        }

        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $mangaFull->setType($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $mangaFull->setType(null);
        }

        if (\array_key_exists('chapters', $data) && null !== $data['chapters']) {
            $mangaFull->setChapters($data['chapters']);
        } elseif (\array_key_exists('chapters', $data) && null === $data['chapters']) {
            $mangaFull->setChapters(null);
        }

        if (\array_key_exists('volumes', $data) && null !== $data['volumes']) {
            $mangaFull->setVolumes($data['volumes']);
        } elseif (\array_key_exists('volumes', $data) && null === $data['volumes']) {
            $mangaFull->setVolumes(null);
        }

        if (\array_key_exists('status', $data)) {
            $mangaFull->setStatus($data['status']);
        }

        if (\array_key_exists('publishing', $data)) {
            $mangaFull->setPublishing($data['publishing']);
        }

        if (\array_key_exists('published', $data)) {
            $mangaFull->setPublished($this->denormalizer->denormalize($data['published'], Daterange::class, 'json', $context));
        }

        if (\array_key_exists('score', $data) && null !== $data['score']) {
            $mangaFull->setScore($data['score']);
        } elseif (\array_key_exists('score', $data) && null === $data['score']) {
            $mangaFull->setScore(null);
        }

        if (\array_key_exists('scored_by', $data) && null !== $data['scored_by']) {
            $mangaFull->setScoredBy($data['scored_by']);
        } elseif (\array_key_exists('scored_by', $data) && null === $data['scored_by']) {
            $mangaFull->setScoredBy(null);
        }

        if (\array_key_exists('rank', $data) && null !== $data['rank']) {
            $mangaFull->setRank($data['rank']);
        } elseif (\array_key_exists('rank', $data) && null === $data['rank']) {
            $mangaFull->setRank(null);
        }

        if (\array_key_exists('popularity', $data) && null !== $data['popularity']) {
            $mangaFull->setPopularity($data['popularity']);
        } elseif (\array_key_exists('popularity', $data) && null === $data['popularity']) {
            $mangaFull->setPopularity(null);
        }

        if (\array_key_exists('members', $data) && null !== $data['members']) {
            $mangaFull->setMembers($data['members']);
        } elseif (\array_key_exists('members', $data) && null === $data['members']) {
            $mangaFull->setMembers(null);
        }

        if (\array_key_exists('favorites', $data) && null !== $data['favorites']) {
            $mangaFull->setFavorites($data['favorites']);
        } elseif (\array_key_exists('favorites', $data) && null === $data['favorites']) {
            $mangaFull->setFavorites(null);
        }

        if (\array_key_exists('synopsis', $data) && null !== $data['synopsis']) {
            $mangaFull->setSynopsis($data['synopsis']);
        } elseif (\array_key_exists('synopsis', $data) && null === $data['synopsis']) {
            $mangaFull->setSynopsis(null);
        }

        if (\array_key_exists('background', $data) && null !== $data['background']) {
            $mangaFull->setBackground($data['background']);
        } elseif (\array_key_exists('background', $data) && null === $data['background']) {
            $mangaFull->setBackground(null);
        }

        if (\array_key_exists('authors', $data)) {
            $values_2 = [];
            foreach ($data['authors'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, MalUrl::class, 'json', $context);
            }

            $mangaFull->setAuthors($values_2);
        }

        if (\array_key_exists('serializations', $data)) {
            $values_3 = [];
            foreach ($data['serializations'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, MalUrl::class, 'json', $context);
            }

            $mangaFull->setSerializations($values_3);
        }

        if (\array_key_exists('genres', $data)) {
            $values_4 = [];
            foreach ($data['genres'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, MalUrl::class, 'json', $context);
            }

            $mangaFull->setGenres($values_4);
        }

        if (\array_key_exists('explicit_genres', $data)) {
            $values_5 = [];
            foreach ($data['explicit_genres'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, MalUrl::class, 'json', $context);
            }

            $mangaFull->setExplicitGenres($values_5);
        }

        if (\array_key_exists('themes', $data)) {
            $values_6 = [];
            foreach ($data['themes'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, MalUrl::class, 'json', $context);
            }

            $mangaFull->setThemes($values_6);
        }

        if (\array_key_exists('demographics', $data)) {
            $values_7 = [];
            foreach ($data['demographics'] as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, MalUrl::class, 'json', $context);
            }

            $mangaFull->setDemographics($values_7);
        }

        if (\array_key_exists('relations', $data)) {
            $values_8 = [];
            foreach ($data['relations'] as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, MangaFullRelationsItem::class, 'json', $context);
            }

            $mangaFull->setRelations($values_8);
        }

        if (\array_key_exists('external', $data)) {
            $values_9 = [];
            foreach ($data['external'] as $value_9) {
                $values_9[] = $this->denormalizer->denormalize($value_9, MangaFullExternalItem::class, 'json', $context);
            }

            $mangaFull->setExternal($values_9);
        }

        return $mangaFull;
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

        if (null !== $object->getChapters()) {
            $data['chapters'] = $object->getChapters();
        }

        if (null !== $object->getVolumes()) {
            $data['volumes'] = $object->getVolumes();
        }

        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }

        if (null !== $object->getPublishing()) {
            $data['publishing'] = $object->getPublishing();
        }

        if (null !== $object->getPublished()) {
            $data['published'] = $this->normalizer->normalize($object->getPublished(), 'json', $context);
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

        if (null !== $object->getAuthors()) {
            $values_2 = [];
            foreach ($object->getAuthors() as $author) {
                $values_2[] = $this->normalizer->normalize($author, 'json', $context);
            }

            $data['authors'] = $values_2;
        }

        if (null !== $object->getSerializations()) {
            $values_3 = [];
            foreach ($object->getSerializations() as $serialization) {
                $values_3[] = $this->normalizer->normalize($serialization, 'json', $context);
            }

            $data['serializations'] = $values_3;
        }

        if (null !== $object->getGenres()) {
            $values_4 = [];
            foreach ($object->getGenres() as $genre) {
                $values_4[] = $this->normalizer->normalize($genre, 'json', $context);
            }

            $data['genres'] = $values_4;
        }

        if (null !== $object->getExplicitGenres()) {
            $values_5 = [];
            foreach ($object->getExplicitGenres() as $explicitGenre) {
                $values_5[] = $this->normalizer->normalize($explicitGenre, 'json', $context);
            }

            $data['explicit_genres'] = $values_5;
        }

        if (null !== $object->getThemes()) {
            $values_6 = [];
            foreach ($object->getThemes() as $theme) {
                $values_6[] = $this->normalizer->normalize($theme, 'json', $context);
            }

            $data['themes'] = $values_6;
        }

        if (null !== $object->getDemographics()) {
            $values_7 = [];
            foreach ($object->getDemographics() as $demographic) {
                $values_7[] = $this->normalizer->normalize($demographic, 'json', $context);
            }

            $data['demographics'] = $values_7;
        }

        if (null !== $object->getRelations()) {
            $values_8 = [];
            foreach ($object->getRelations() as $relation) {
                $values_8[] = $this->normalizer->normalize($relation, 'json', $context);
            }

            $data['relations'] = $values_8;
        }

        if (null !== $object->getExternal()) {
            $values_9 = [];
            foreach ($object->getExternal() as $value_9) {
                $values_9[] = $this->normalizer->normalize($value_9, 'json', $context);
            }

            $data['external'] = $values_9;
        }

        return $data;
    }
}

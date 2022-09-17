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

class MangaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'Jikan\\JikanPHP\\Model\\Manga' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && 'Jikan\\JikanPHP\\Model\\Manga' === get_class($data);
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
        $object = new \Jikan\JikanPHP\Model\Manga();
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
            $object->setImages($this->denormalizer->denormalize($data['images'], 'Jikan\\JikanPHP\\Model\\MangaImages', 'json', $context));
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
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }
        if (\array_key_exists('chapters', $data) && null !== $data['chapters']) {
            $object->setChapters($data['chapters']);
        } elseif (\array_key_exists('chapters', $data) && null === $data['chapters']) {
            $object->setChapters(null);
        }
        if (\array_key_exists('volumes', $data) && null !== $data['volumes']) {
            $object->setVolumes($data['volumes']);
        } elseif (\array_key_exists('volumes', $data) && null === $data['volumes']) {
            $object->setVolumes(null);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('publishing', $data)) {
            $object->setPublishing($data['publishing']);
        }
        if (\array_key_exists('published', $data)) {
            $object->setPublished($this->denormalizer->denormalize($data['published'], 'Jikan\\JikanPHP\\Model\\Daterange', 'json', $context));
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
        if (\array_key_exists('authors', $data)) {
            $values_1 = [];
            foreach ($data['authors'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Jikan\\JikanPHP\\Model\\MalUrl', 'json', $context);
            }
            $object->setAuthors($values_1);
        }
        if (\array_key_exists('serializations', $data)) {
            $values_2 = [];
            foreach ($data['serializations'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Jikan\\JikanPHP\\Model\\MalUrl', 'json', $context);
            }
            $object->setSerializations($values_2);
        }
        if (\array_key_exists('genres', $data)) {
            $values_3 = [];
            foreach ($data['genres'] as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Jikan\\JikanPHP\\Model\\MalUrl', 'json', $context);
            }
            $object->setGenres($values_3);
        }
        if (\array_key_exists('explicit_genres', $data)) {
            $values_4 = [];
            foreach ($data['explicit_genres'] as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Jikan\\JikanPHP\\Model\\MalUrl', 'json', $context);
            }
            $object->setExplicitGenres($values_4);
        }
        if (\array_key_exists('themes', $data)) {
            $values_5 = [];
            foreach ($data['themes'] as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Jikan\\JikanPHP\\Model\\MalUrl', 'json', $context);
            }
            $object->setThemes($values_5);
        }
        if (\array_key_exists('demographics', $data)) {
            $values_6 = [];
            foreach ($data['demographics'] as $value_6) {
                $values_6[] = $this->denormalizer->denormalize($value_6, 'Jikan\\JikanPHP\\Model\\MalUrl', 'json', $context);
            }
            $object->setDemographics($values_6);
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
            $values_1 = [];
            foreach ($object->getAuthors() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['authors'] = $values_1;
        }
        if (null !== $object->getSerializations()) {
            $values_2 = [];
            foreach ($object->getSerializations() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['serializations'] = $values_2;
        }
        if (null !== $object->getGenres()) {
            $values_3 = [];
            foreach ($object->getGenres() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data['genres'] = $values_3;
        }
        if (null !== $object->getExplicitGenres()) {
            $values_4 = [];
            foreach ($object->getExplicitGenres() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data['explicit_genres'] = $values_4;
        }
        if (null !== $object->getThemes()) {
            $values_5 = [];
            foreach ($object->getThemes() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data['themes'] = $values_5;
        }
        if (null !== $object->getDemographics()) {
            $values_6 = [];
            foreach ($object->getDemographics() as $value_6) {
                $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
            }
            $data['demographics'] = $values_6;
        }

        return $data;
    }
}

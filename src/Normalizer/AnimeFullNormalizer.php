<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Normalizer;

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
use Jikan\JikanPHP\Model\Title;
use Jikan\JikanPHP\Model\TrailerBase;
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
    class AnimeFullNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return AnimeFull::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof AnimeFull;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }

            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }

            $object = new AnimeFull();
            if (\array_key_exists('score', $data) && \is_int($data['score'])) {
                $data['score'] = (float) $data['score'];
            }

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

            if (\array_key_exists('images', $data)) {
                $object->setImages($this->denormalizer->denormalize($data['images'], AnimeImages::class, 'json', $context));
                unset($data['images']);
            }

            if (\array_key_exists('trailer', $data)) {
                $object->setTrailer($this->denormalizer->denormalize($data['trailer'], TrailerBase::class, 'json', $context));
                unset($data['trailer']);
            }

            if (\array_key_exists('approved', $data)) {
                $object->setApproved($data['approved']);
                unset($data['approved']);
            }

            if (\array_key_exists('titles', $data)) {
                $values = [];
                foreach ($data['titles'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, Title::class, 'json', $context);
                }

                $object->setTitles($values);
                unset($data['titles']);
            }

            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }

            if (\array_key_exists('title_english', $data) && null !== $data['title_english']) {
                $object->setTitleEnglish($data['title_english']);
                unset($data['title_english']);
            } elseif (\array_key_exists('title_english', $data) && null === $data['title_english']) {
                $object->setTitleEnglish(null);
            }

            if (\array_key_exists('title_japanese', $data) && null !== $data['title_japanese']) {
                $object->setTitleJapanese($data['title_japanese']);
                unset($data['title_japanese']);
            } elseif (\array_key_exists('title_japanese', $data) && null === $data['title_japanese']) {
                $object->setTitleJapanese(null);
            }

            if (\array_key_exists('title_synonyms', $data)) {
                $values_1 = [];
                foreach ($data['title_synonyms'] as $value_1) {
                    $values_1[] = $value_1;
                }

                $object->setTitleSynonyms($values_1);
                unset($data['title_synonyms']);
            }

            if (\array_key_exists('type', $data) && null !== $data['type']) {
                $object->setType($data['type']);
                unset($data['type']);
            } elseif (\array_key_exists('type', $data) && null === $data['type']) {
                $object->setType(null);
            }

            if (\array_key_exists('source', $data) && null !== $data['source']) {
                $object->setSource($data['source']);
                unset($data['source']);
            } elseif (\array_key_exists('source', $data) && null === $data['source']) {
                $object->setSource(null);
            }

            if (\array_key_exists('episodes', $data) && null !== $data['episodes']) {
                $object->setEpisodes($data['episodes']);
                unset($data['episodes']);
            } elseif (\array_key_exists('episodes', $data) && null === $data['episodes']) {
                $object->setEpisodes(null);
            }

            if (\array_key_exists('status', $data) && null !== $data['status']) {
                $object->setStatus($data['status']);
                unset($data['status']);
            } elseif (\array_key_exists('status', $data) && null === $data['status']) {
                $object->setStatus(null);
            }

            if (\array_key_exists('airing', $data)) {
                $object->setAiring($data['airing']);
                unset($data['airing']);
            }

            if (\array_key_exists('aired', $data)) {
                $object->setAired($this->denormalizer->denormalize($data['aired'], Daterange::class, 'json', $context));
                unset($data['aired']);
            }

            if (\array_key_exists('duration', $data) && null !== $data['duration']) {
                $object->setDuration($data['duration']);
                unset($data['duration']);
            } elseif (\array_key_exists('duration', $data) && null === $data['duration']) {
                $object->setDuration(null);
            }

            if (\array_key_exists('rating', $data) && null !== $data['rating']) {
                $object->setRating($data['rating']);
                unset($data['rating']);
            } elseif (\array_key_exists('rating', $data) && null === $data['rating']) {
                $object->setRating(null);
            }

            if (\array_key_exists('score', $data) && null !== $data['score']) {
                $object->setScore($data['score']);
                unset($data['score']);
            } elseif (\array_key_exists('score', $data) && null === $data['score']) {
                $object->setScore(null);
            }

            if (\array_key_exists('scored_by', $data) && null !== $data['scored_by']) {
                $object->setScoredBy($data['scored_by']);
                unset($data['scored_by']);
            } elseif (\array_key_exists('scored_by', $data) && null === $data['scored_by']) {
                $object->setScoredBy(null);
            }

            if (\array_key_exists('rank', $data) && null !== $data['rank']) {
                $object->setRank($data['rank']);
                unset($data['rank']);
            } elseif (\array_key_exists('rank', $data) && null === $data['rank']) {
                $object->setRank(null);
            }

            if (\array_key_exists('popularity', $data) && null !== $data['popularity']) {
                $object->setPopularity($data['popularity']);
                unset($data['popularity']);
            } elseif (\array_key_exists('popularity', $data) && null === $data['popularity']) {
                $object->setPopularity(null);
            }

            if (\array_key_exists('members', $data) && null !== $data['members']) {
                $object->setMembers($data['members']);
                unset($data['members']);
            } elseif (\array_key_exists('members', $data) && null === $data['members']) {
                $object->setMembers(null);
            }

            if (\array_key_exists('favorites', $data) && null !== $data['favorites']) {
                $object->setFavorites($data['favorites']);
                unset($data['favorites']);
            } elseif (\array_key_exists('favorites', $data) && null === $data['favorites']) {
                $object->setFavorites(null);
            }

            if (\array_key_exists('synopsis', $data) && null !== $data['synopsis']) {
                $object->setSynopsis($data['synopsis']);
                unset($data['synopsis']);
            } elseif (\array_key_exists('synopsis', $data) && null === $data['synopsis']) {
                $object->setSynopsis(null);
            }

            if (\array_key_exists('background', $data) && null !== $data['background']) {
                $object->setBackground($data['background']);
                unset($data['background']);
            } elseif (\array_key_exists('background', $data) && null === $data['background']) {
                $object->setBackground(null);
            }

            if (\array_key_exists('season', $data) && null !== $data['season']) {
                $object->setSeason($data['season']);
                unset($data['season']);
            } elseif (\array_key_exists('season', $data) && null === $data['season']) {
                $object->setSeason(null);
            }

            if (\array_key_exists('year', $data) && null !== $data['year']) {
                $object->setYear($data['year']);
                unset($data['year']);
            } elseif (\array_key_exists('year', $data) && null === $data['year']) {
                $object->setYear(null);
            }

            if (\array_key_exists('broadcast', $data)) {
                $object->setBroadcast($this->denormalizer->denormalize($data['broadcast'], Broadcast::class, 'json', $context));
                unset($data['broadcast']);
            }

            if (\array_key_exists('producers', $data)) {
                $values_2 = [];
                foreach ($data['producers'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, MalUrl::class, 'json', $context);
                }

                $object->setProducers($values_2);
                unset($data['producers']);
            }

            if (\array_key_exists('licensors', $data)) {
                $values_3 = [];
                foreach ($data['licensors'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, MalUrl::class, 'json', $context);
                }

                $object->setLicensors($values_3);
                unset($data['licensors']);
            }

            if (\array_key_exists('studios', $data)) {
                $values_4 = [];
                foreach ($data['studios'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, MalUrl::class, 'json', $context);
                }

                $object->setStudios($values_4);
                unset($data['studios']);
            }

            if (\array_key_exists('genres', $data)) {
                $values_5 = [];
                foreach ($data['genres'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, MalUrl::class, 'json', $context);
                }

                $object->setGenres($values_5);
                unset($data['genres']);
            }

            if (\array_key_exists('explicit_genres', $data)) {
                $values_6 = [];
                foreach ($data['explicit_genres'] as $value_6) {
                    $values_6[] = $this->denormalizer->denormalize($value_6, MalUrl::class, 'json', $context);
                }

                $object->setExplicitGenres($values_6);
                unset($data['explicit_genres']);
            }

            if (\array_key_exists('themes', $data)) {
                $values_7 = [];
                foreach ($data['themes'] as $value_7) {
                    $values_7[] = $this->denormalizer->denormalize($value_7, MalUrl::class, 'json', $context);
                }

                $object->setThemes($values_7);
                unset($data['themes']);
            }

            if (\array_key_exists('demographics', $data)) {
                $values_8 = [];
                foreach ($data['demographics'] as $value_8) {
                    $values_8[] = $this->denormalizer->denormalize($value_8, MalUrl::class, 'json', $context);
                }

                $object->setDemographics($values_8);
                unset($data['demographics']);
            }

            if (\array_key_exists('relations', $data)) {
                $values_9 = [];
                foreach ($data['relations'] as $value_9) {
                    $values_9[] = $this->denormalizer->denormalize($value_9, AnimeFullRelationsItem::class, 'json', $context);
                }

                $object->setRelations($values_9);
                unset($data['relations']);
            }

            if (\array_key_exists('theme', $data)) {
                $object->setTheme($this->denormalizer->denormalize($data['theme'], AnimeFullTheme::class, 'json', $context));
                unset($data['theme']);
            }

            if (\array_key_exists('external', $data)) {
                $values_10 = [];
                foreach ($data['external'] as $value_10) {
                    $values_10[] = $this->denormalizer->denormalize($value_10, AnimeFullExternalItem::class, 'json', $context);
                }

                $object->setExternal($values_10);
                unset($data['external']);
            }

            if (\array_key_exists('streaming', $data)) {
                $values_11 = [];
                foreach ($data['streaming'] as $value_11) {
                    $values_11[] = $this->denormalizer->denormalize($value_11, AnimeFullStreamingItem::class, 'json', $context);
                }

                $object->setStreaming($values_11);
                unset($data['streaming']);
            }

            foreach ($data as $key => $value_12) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_12;
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

            if ($object->isInitialized('images') && null !== $object->getImages()) {
                $data['images'] = $this->normalizer->normalize($object->getImages(), 'json', $context);
            }

            if ($object->isInitialized('trailer') && null !== $object->getTrailer()) {
                $data['trailer'] = $this->normalizer->normalize($object->getTrailer(), 'json', $context);
            }

            if ($object->isInitialized('approved') && null !== $object->getApproved()) {
                $data['approved'] = $object->getApproved();
            }

            if ($object->isInitialized('titles') && null !== $object->getTitles()) {
                $values = [];
                foreach ($object->getTitles() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['titles'] = $values;
            }

            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }

            if ($object->isInitialized('titleEnglish') && null !== $object->getTitleEnglish()) {
                $data['title_english'] = $object->getTitleEnglish();
            }

            if ($object->isInitialized('titleJapanese') && null !== $object->getTitleJapanese()) {
                $data['title_japanese'] = $object->getTitleJapanese();
            }

            if ($object->isInitialized('titleSynonyms') && null !== $object->getTitleSynonyms()) {
                $values_1 = [];
                foreach ($object->getTitleSynonyms() as $value_1) {
                    $values_1[] = $value_1;
                }

                $data['title_synonyms'] = $values_1;
            }

            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }

            if ($object->isInitialized('source') && null !== $object->getSource()) {
                $data['source'] = $object->getSource();
            }

            if ($object->isInitialized('episodes') && null !== $object->getEpisodes()) {
                $data['episodes'] = $object->getEpisodes();
            }

            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }

            if ($object->isInitialized('airing') && null !== $object->getAiring()) {
                $data['airing'] = $object->getAiring();
            }

            if ($object->isInitialized('aired') && null !== $object->getAired()) {
                $data['aired'] = $this->normalizer->normalize($object->getAired(), 'json', $context);
            }

            if ($object->isInitialized('duration') && null !== $object->getDuration()) {
                $data['duration'] = $object->getDuration();
            }

            if ($object->isInitialized('rating') && null !== $object->getRating()) {
                $data['rating'] = $object->getRating();
            }

            if ($object->isInitialized('score') && null !== $object->getScore()) {
                $data['score'] = $object->getScore();
            }

            if ($object->isInitialized('scoredBy') && null !== $object->getScoredBy()) {
                $data['scored_by'] = $object->getScoredBy();
            }

            if ($object->isInitialized('rank') && null !== $object->getRank()) {
                $data['rank'] = $object->getRank();
            }

            if ($object->isInitialized('popularity') && null !== $object->getPopularity()) {
                $data['popularity'] = $object->getPopularity();
            }

            if ($object->isInitialized('members') && null !== $object->getMembers()) {
                $data['members'] = $object->getMembers();
            }

            if ($object->isInitialized('favorites') && null !== $object->getFavorites()) {
                $data['favorites'] = $object->getFavorites();
            }

            if ($object->isInitialized('synopsis') && null !== $object->getSynopsis()) {
                $data['synopsis'] = $object->getSynopsis();
            }

            if ($object->isInitialized('background') && null !== $object->getBackground()) {
                $data['background'] = $object->getBackground();
            }

            if ($object->isInitialized('season') && null !== $object->getSeason()) {
                $data['season'] = $object->getSeason();
            }

            if ($object->isInitialized('year') && null !== $object->getYear()) {
                $data['year'] = $object->getYear();
            }

            if ($object->isInitialized('broadcast') && null !== $object->getBroadcast()) {
                $data['broadcast'] = $this->normalizer->normalize($object->getBroadcast(), 'json', $context);
            }

            if ($object->isInitialized('producers') && null !== $object->getProducers()) {
                $values_2 = [];
                foreach ($object->getProducers() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }

                $data['producers'] = $values_2;
            }

            if ($object->isInitialized('licensors') && null !== $object->getLicensors()) {
                $values_3 = [];
                foreach ($object->getLicensors() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }

                $data['licensors'] = $values_3;
            }

            if ($object->isInitialized('studios') && null !== $object->getStudios()) {
                $values_4 = [];
                foreach ($object->getStudios() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }

                $data['studios'] = $values_4;
            }

            if ($object->isInitialized('genres') && null !== $object->getGenres()) {
                $values_5 = [];
                foreach ($object->getGenres() as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }

                $data['genres'] = $values_5;
            }

            if ($object->isInitialized('explicitGenres') && null !== $object->getExplicitGenres()) {
                $values_6 = [];
                foreach ($object->getExplicitGenres() as $value_6) {
                    $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
                }

                $data['explicit_genres'] = $values_6;
            }

            if ($object->isInitialized('themes') && null !== $object->getThemes()) {
                $values_7 = [];
                foreach ($object->getThemes() as $value_7) {
                    $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
                }

                $data['themes'] = $values_7;
            }

            if ($object->isInitialized('demographics') && null !== $object->getDemographics()) {
                $values_8 = [];
                foreach ($object->getDemographics() as $value_8) {
                    $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
                }

                $data['demographics'] = $values_8;
            }

            if ($object->isInitialized('relations') && null !== $object->getRelations()) {
                $values_9 = [];
                foreach ($object->getRelations() as $value_9) {
                    $values_9[] = $this->normalizer->normalize($value_9, 'json', $context);
                }

                $data['relations'] = $values_9;
            }

            if ($object->isInitialized('theme') && null !== $object->getTheme()) {
                $data['theme'] = $this->normalizer->normalize($object->getTheme(), 'json', $context);
            }

            if ($object->isInitialized('external') && null !== $object->getExternal()) {
                $values_10 = [];
                foreach ($object->getExternal() as $value_10) {
                    $values_10[] = $this->normalizer->normalize($value_10, 'json', $context);
                }

                $data['external'] = $values_10;
            }

            if ($object->isInitialized('streaming') && null !== $object->getStreaming()) {
                $values_11 = [];
                foreach ($object->getStreaming() as $value_11) {
                    $values_11[] = $this->normalizer->normalize($value_11, 'json', $context);
                }

                $data['streaming'] = $values_11;
            }

            foreach ($object as $key => $value_12) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_12;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [AnimeFull::class => false];
        }
    }
} else {
    class AnimeFullNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return AnimeFull::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return $data instanceof AnimeFull;
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

            $object = new AnimeFull();
            if (\array_key_exists('score', $data) && \is_int($data['score'])) {
                $data['score'] = (float) $data['score'];
            }

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

            if (\array_key_exists('images', $data)) {
                $object->setImages($this->denormalizer->denormalize($data['images'], AnimeImages::class, 'json', $context));
                unset($data['images']);
            }

            if (\array_key_exists('trailer', $data)) {
                $object->setTrailer($this->denormalizer->denormalize($data['trailer'], TrailerBase::class, 'json', $context));
                unset($data['trailer']);
            }

            if (\array_key_exists('approved', $data)) {
                $object->setApproved($data['approved']);
                unset($data['approved']);
            }

            if (\array_key_exists('titles', $data)) {
                $values = [];
                foreach ($data['titles'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, Title::class, 'json', $context);
                }

                $object->setTitles($values);
                unset($data['titles']);
            }

            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }

            if (\array_key_exists('title_english', $data) && null !== $data['title_english']) {
                $object->setTitleEnglish($data['title_english']);
                unset($data['title_english']);
            } elseif (\array_key_exists('title_english', $data) && null === $data['title_english']) {
                $object->setTitleEnglish(null);
            }

            if (\array_key_exists('title_japanese', $data) && null !== $data['title_japanese']) {
                $object->setTitleJapanese($data['title_japanese']);
                unset($data['title_japanese']);
            } elseif (\array_key_exists('title_japanese', $data) && null === $data['title_japanese']) {
                $object->setTitleJapanese(null);
            }

            if (\array_key_exists('title_synonyms', $data)) {
                $values_1 = [];
                foreach ($data['title_synonyms'] as $value_1) {
                    $values_1[] = $value_1;
                }

                $object->setTitleSynonyms($values_1);
                unset($data['title_synonyms']);
            }

            if (\array_key_exists('type', $data) && null !== $data['type']) {
                $object->setType($data['type']);
                unset($data['type']);
            } elseif (\array_key_exists('type', $data) && null === $data['type']) {
                $object->setType(null);
            }

            if (\array_key_exists('source', $data) && null !== $data['source']) {
                $object->setSource($data['source']);
                unset($data['source']);
            } elseif (\array_key_exists('source', $data) && null === $data['source']) {
                $object->setSource(null);
            }

            if (\array_key_exists('episodes', $data) && null !== $data['episodes']) {
                $object->setEpisodes($data['episodes']);
                unset($data['episodes']);
            } elseif (\array_key_exists('episodes', $data) && null === $data['episodes']) {
                $object->setEpisodes(null);
            }

            if (\array_key_exists('status', $data) && null !== $data['status']) {
                $object->setStatus($data['status']);
                unset($data['status']);
            } elseif (\array_key_exists('status', $data) && null === $data['status']) {
                $object->setStatus(null);
            }

            if (\array_key_exists('airing', $data)) {
                $object->setAiring($data['airing']);
                unset($data['airing']);
            }

            if (\array_key_exists('aired', $data)) {
                $object->setAired($this->denormalizer->denormalize($data['aired'], Daterange::class, 'json', $context));
                unset($data['aired']);
            }

            if (\array_key_exists('duration', $data) && null !== $data['duration']) {
                $object->setDuration($data['duration']);
                unset($data['duration']);
            } elseif (\array_key_exists('duration', $data) && null === $data['duration']) {
                $object->setDuration(null);
            }

            if (\array_key_exists('rating', $data) && null !== $data['rating']) {
                $object->setRating($data['rating']);
                unset($data['rating']);
            } elseif (\array_key_exists('rating', $data) && null === $data['rating']) {
                $object->setRating(null);
            }

            if (\array_key_exists('score', $data) && null !== $data['score']) {
                $object->setScore($data['score']);
                unset($data['score']);
            } elseif (\array_key_exists('score', $data) && null === $data['score']) {
                $object->setScore(null);
            }

            if (\array_key_exists('scored_by', $data) && null !== $data['scored_by']) {
                $object->setScoredBy($data['scored_by']);
                unset($data['scored_by']);
            } elseif (\array_key_exists('scored_by', $data) && null === $data['scored_by']) {
                $object->setScoredBy(null);
            }

            if (\array_key_exists('rank', $data) && null !== $data['rank']) {
                $object->setRank($data['rank']);
                unset($data['rank']);
            } elseif (\array_key_exists('rank', $data) && null === $data['rank']) {
                $object->setRank(null);
            }

            if (\array_key_exists('popularity', $data) && null !== $data['popularity']) {
                $object->setPopularity($data['popularity']);
                unset($data['popularity']);
            } elseif (\array_key_exists('popularity', $data) && null === $data['popularity']) {
                $object->setPopularity(null);
            }

            if (\array_key_exists('members', $data) && null !== $data['members']) {
                $object->setMembers($data['members']);
                unset($data['members']);
            } elseif (\array_key_exists('members', $data) && null === $data['members']) {
                $object->setMembers(null);
            }

            if (\array_key_exists('favorites', $data) && null !== $data['favorites']) {
                $object->setFavorites($data['favorites']);
                unset($data['favorites']);
            } elseif (\array_key_exists('favorites', $data) && null === $data['favorites']) {
                $object->setFavorites(null);
            }

            if (\array_key_exists('synopsis', $data) && null !== $data['synopsis']) {
                $object->setSynopsis($data['synopsis']);
                unset($data['synopsis']);
            } elseif (\array_key_exists('synopsis', $data) && null === $data['synopsis']) {
                $object->setSynopsis(null);
            }

            if (\array_key_exists('background', $data) && null !== $data['background']) {
                $object->setBackground($data['background']);
                unset($data['background']);
            } elseif (\array_key_exists('background', $data) && null === $data['background']) {
                $object->setBackground(null);
            }

            if (\array_key_exists('season', $data) && null !== $data['season']) {
                $object->setSeason($data['season']);
                unset($data['season']);
            } elseif (\array_key_exists('season', $data) && null === $data['season']) {
                $object->setSeason(null);
            }

            if (\array_key_exists('year', $data) && null !== $data['year']) {
                $object->setYear($data['year']);
                unset($data['year']);
            } elseif (\array_key_exists('year', $data) && null === $data['year']) {
                $object->setYear(null);
            }

            if (\array_key_exists('broadcast', $data)) {
                $object->setBroadcast($this->denormalizer->denormalize($data['broadcast'], Broadcast::class, 'json', $context));
                unset($data['broadcast']);
            }

            if (\array_key_exists('producers', $data)) {
                $values_2 = [];
                foreach ($data['producers'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, MalUrl::class, 'json', $context);
                }

                $object->setProducers($values_2);
                unset($data['producers']);
            }

            if (\array_key_exists('licensors', $data)) {
                $values_3 = [];
                foreach ($data['licensors'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, MalUrl::class, 'json', $context);
                }

                $object->setLicensors($values_3);
                unset($data['licensors']);
            }

            if (\array_key_exists('studios', $data)) {
                $values_4 = [];
                foreach ($data['studios'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, MalUrl::class, 'json', $context);
                }

                $object->setStudios($values_4);
                unset($data['studios']);
            }

            if (\array_key_exists('genres', $data)) {
                $values_5 = [];
                foreach ($data['genres'] as $value_5) {
                    $values_5[] = $this->denormalizer->denormalize($value_5, MalUrl::class, 'json', $context);
                }

                $object->setGenres($values_5);
                unset($data['genres']);
            }

            if (\array_key_exists('explicit_genres', $data)) {
                $values_6 = [];
                foreach ($data['explicit_genres'] as $value_6) {
                    $values_6[] = $this->denormalizer->denormalize($value_6, MalUrl::class, 'json', $context);
                }

                $object->setExplicitGenres($values_6);
                unset($data['explicit_genres']);
            }

            if (\array_key_exists('themes', $data)) {
                $values_7 = [];
                foreach ($data['themes'] as $value_7) {
                    $values_7[] = $this->denormalizer->denormalize($value_7, MalUrl::class, 'json', $context);
                }

                $object->setThemes($values_7);
                unset($data['themes']);
            }

            if (\array_key_exists('demographics', $data)) {
                $values_8 = [];
                foreach ($data['demographics'] as $value_8) {
                    $values_8[] = $this->denormalizer->denormalize($value_8, MalUrl::class, 'json', $context);
                }

                $object->setDemographics($values_8);
                unset($data['demographics']);
            }

            if (\array_key_exists('relations', $data)) {
                $values_9 = [];
                foreach ($data['relations'] as $value_9) {
                    $values_9[] = $this->denormalizer->denormalize($value_9, AnimeFullRelationsItem::class, 'json', $context);
                }

                $object->setRelations($values_9);
                unset($data['relations']);
            }

            if (\array_key_exists('theme', $data)) {
                $object->setTheme($this->denormalizer->denormalize($data['theme'], AnimeFullTheme::class, 'json', $context));
                unset($data['theme']);
            }

            if (\array_key_exists('external', $data)) {
                $values_10 = [];
                foreach ($data['external'] as $value_10) {
                    $values_10[] = $this->denormalizer->denormalize($value_10, AnimeFullExternalItem::class, 'json', $context);
                }

                $object->setExternal($values_10);
                unset($data['external']);
            }

            if (\array_key_exists('streaming', $data)) {
                $values_11 = [];
                foreach ($data['streaming'] as $value_11) {
                    $values_11[] = $this->denormalizer->denormalize($value_11, AnimeFullStreamingItem::class, 'json', $context);
                }

                $object->setStreaming($values_11);
                unset($data['streaming']);
            }

            foreach ($data as $key => $value_12) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_12;
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

            if ($object->isInitialized('images') && null !== $object->getImages()) {
                $data['images'] = $this->normalizer->normalize($object->getImages(), 'json', $context);
            }

            if ($object->isInitialized('trailer') && null !== $object->getTrailer()) {
                $data['trailer'] = $this->normalizer->normalize($object->getTrailer(), 'json', $context);
            }

            if ($object->isInitialized('approved') && null !== $object->getApproved()) {
                $data['approved'] = $object->getApproved();
            }

            if ($object->isInitialized('titles') && null !== $object->getTitles()) {
                $values = [];
                foreach ($object->getTitles() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }

                $data['titles'] = $values;
            }

            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }

            if ($object->isInitialized('titleEnglish') && null !== $object->getTitleEnglish()) {
                $data['title_english'] = $object->getTitleEnglish();
            }

            if ($object->isInitialized('titleJapanese') && null !== $object->getTitleJapanese()) {
                $data['title_japanese'] = $object->getTitleJapanese();
            }

            if ($object->isInitialized('titleSynonyms') && null !== $object->getTitleSynonyms()) {
                $values_1 = [];
                foreach ($object->getTitleSynonyms() as $value_1) {
                    $values_1[] = $value_1;
                }

                $data['title_synonyms'] = $values_1;
            }

            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }

            if ($object->isInitialized('source') && null !== $object->getSource()) {
                $data['source'] = $object->getSource();
            }

            if ($object->isInitialized('episodes') && null !== $object->getEpisodes()) {
                $data['episodes'] = $object->getEpisodes();
            }

            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }

            if ($object->isInitialized('airing') && null !== $object->getAiring()) {
                $data['airing'] = $object->getAiring();
            }

            if ($object->isInitialized('aired') && null !== $object->getAired()) {
                $data['aired'] = $this->normalizer->normalize($object->getAired(), 'json', $context);
            }

            if ($object->isInitialized('duration') && null !== $object->getDuration()) {
                $data['duration'] = $object->getDuration();
            }

            if ($object->isInitialized('rating') && null !== $object->getRating()) {
                $data['rating'] = $object->getRating();
            }

            if ($object->isInitialized('score') && null !== $object->getScore()) {
                $data['score'] = $object->getScore();
            }

            if ($object->isInitialized('scoredBy') && null !== $object->getScoredBy()) {
                $data['scored_by'] = $object->getScoredBy();
            }

            if ($object->isInitialized('rank') && null !== $object->getRank()) {
                $data['rank'] = $object->getRank();
            }

            if ($object->isInitialized('popularity') && null !== $object->getPopularity()) {
                $data['popularity'] = $object->getPopularity();
            }

            if ($object->isInitialized('members') && null !== $object->getMembers()) {
                $data['members'] = $object->getMembers();
            }

            if ($object->isInitialized('favorites') && null !== $object->getFavorites()) {
                $data['favorites'] = $object->getFavorites();
            }

            if ($object->isInitialized('synopsis') && null !== $object->getSynopsis()) {
                $data['synopsis'] = $object->getSynopsis();
            }

            if ($object->isInitialized('background') && null !== $object->getBackground()) {
                $data['background'] = $object->getBackground();
            }

            if ($object->isInitialized('season') && null !== $object->getSeason()) {
                $data['season'] = $object->getSeason();
            }

            if ($object->isInitialized('year') && null !== $object->getYear()) {
                $data['year'] = $object->getYear();
            }

            if ($object->isInitialized('broadcast') && null !== $object->getBroadcast()) {
                $data['broadcast'] = $this->normalizer->normalize($object->getBroadcast(), 'json', $context);
            }

            if ($object->isInitialized('producers') && null !== $object->getProducers()) {
                $values_2 = [];
                foreach ($object->getProducers() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }

                $data['producers'] = $values_2;
            }

            if ($object->isInitialized('licensors') && null !== $object->getLicensors()) {
                $values_3 = [];
                foreach ($object->getLicensors() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }

                $data['licensors'] = $values_3;
            }

            if ($object->isInitialized('studios') && null !== $object->getStudios()) {
                $values_4 = [];
                foreach ($object->getStudios() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }

                $data['studios'] = $values_4;
            }

            if ($object->isInitialized('genres') && null !== $object->getGenres()) {
                $values_5 = [];
                foreach ($object->getGenres() as $value_5) {
                    $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
                }

                $data['genres'] = $values_5;
            }

            if ($object->isInitialized('explicitGenres') && null !== $object->getExplicitGenres()) {
                $values_6 = [];
                foreach ($object->getExplicitGenres() as $value_6) {
                    $values_6[] = $this->normalizer->normalize($value_6, 'json', $context);
                }

                $data['explicit_genres'] = $values_6;
            }

            if ($object->isInitialized('themes') && null !== $object->getThemes()) {
                $values_7 = [];
                foreach ($object->getThemes() as $value_7) {
                    $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
                }

                $data['themes'] = $values_7;
            }

            if ($object->isInitialized('demographics') && null !== $object->getDemographics()) {
                $values_8 = [];
                foreach ($object->getDemographics() as $value_8) {
                    $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
                }

                $data['demographics'] = $values_8;
            }

            if ($object->isInitialized('relations') && null !== $object->getRelations()) {
                $values_9 = [];
                foreach ($object->getRelations() as $value_9) {
                    $values_9[] = $this->normalizer->normalize($value_9, 'json', $context);
                }

                $data['relations'] = $values_9;
            }

            if ($object->isInitialized('theme') && null !== $object->getTheme()) {
                $data['theme'] = $this->normalizer->normalize($object->getTheme(), 'json', $context);
            }

            if ($object->isInitialized('external') && null !== $object->getExternal()) {
                $values_10 = [];
                foreach ($object->getExternal() as $value_10) {
                    $values_10[] = $this->normalizer->normalize($value_10, 'json', $context);
                }

                $data['external'] = $values_10;
            }

            if ($object->isInitialized('streaming') && null !== $object->getStreaming()) {
                $values_11 = [];
                foreach ($object->getStreaming() as $value_11) {
                    $values_11[] = $this->normalizer->normalize($value_11, 'json', $context);
                }

                $data['streaming'] = $values_11;
            }

            foreach ($object as $key => $value_12) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_12;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [AnimeFull::class => false];
        }
    }
}

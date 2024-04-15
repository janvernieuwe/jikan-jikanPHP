<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class AnimeFull extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * MyAnimeList ID.
     *
     * @var int
     */
    protected $malId;

    /**
     * MyAnimeList URL.
     *
     * @var string
     */
    protected $url;

    /**
     * @var AnimeImages
     */
    protected $images;

    /**
     * Youtube Details.
     *
     * @var TrailerBase
     */
    protected $trailer;

    /**
     * Whether the entry is pending approval on MAL or not.
     *
     * @var bool
     */
    protected $approved;

    /**
     * All titles.
     *
     * @var list<Title>
     */
    protected $titles;

    /**
     * Title.
     *
     * @deprecated
     *
     * @var string
     */
    protected $title;

    /**
     * English Title.
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $titleEnglish;

    /**
     * Japanese Title.
     *
     * @deprecated
     *
     * @var string|null
     */
    protected $titleJapanese;

    /**
     * Other Titles.
     *
     * @deprecated
     *
     * @var list<string>
     */
    protected $titleSynonyms;

    /**
     * Anime Type.
     *
     * @var string|null
     */
    protected $type;

    /**
     * Original Material/Source adapted from.
     *
     * @var string|null
     */
    protected $source;

    /**
     * Episode count.
     *
     * @var int|null
     */
    protected $episodes;

    /**
     * Airing status.
     *
     * @var string|null
     */
    protected $status;

    /**
     * Airing boolean.
     *
     * @var bool
     */
    protected $airing;

    /**
     * Date range.
     *
     * @var Daterange
     */
    protected $aired;

    /**
     * Parsed raw duration.
     *
     * @var string|null
     */
    protected $duration;

    /**
     * Anime audience rating.
     *
     * @var string|null
     */
    protected $rating;

    /**
     * Score.
     *
     * @var float|null
     */
    protected $score;

    /**
     * Number of users.
     *
     * @var int|null
     */
    protected $scoredBy;

    /**
     * Ranking.
     *
     * @var int|null
     */
    protected $rank;

    /**
     * Popularity.
     *
     * @var int|null
     */
    protected $popularity;

    /**
     * Number of users who have added this entry to their list.
     *
     * @var int|null
     */
    protected $members;

    /**
     * Number of users who have favorited this entry.
     *
     * @var int|null
     */
    protected $favorites;

    /**
     * Synopsis.
     *
     * @var string|null
     */
    protected $synopsis;

    /**
     * Background.
     *
     * @var string|null
     */
    protected $background;

    /**
     * Season.
     *
     * @var string|null
     */
    protected $season;

    /**
     * Year.
     *
     * @var int|null
     */
    protected $year;

    /**
     * Broadcast Details.
     *
     * @var Broadcast
     */
    protected $broadcast;

    /**
     * @var list<MalUrl>
     */
    protected $producers;

    /**
     * @var list<MalUrl>
     */
    protected $licensors;

    /**
     * @var list<MalUrl>
     */
    protected $studios;

    /**
     * @var list<MalUrl>
     */
    protected $genres;

    /**
     * @var list<MalUrl>
     */
    protected $explicitGenres;

    /**
     * @var list<MalUrl>
     */
    protected $themes;

    /**
     * @var list<MalUrl>
     */
    protected $demographics;

    /**
     * @var list<AnimeFullRelationsItem>
     */
    protected $relations;

    /**
     * @var AnimeFullTheme
     */
    protected $theme;

    /**
     * @var list<AnimeFullExternalItem>
     */
    protected $external;

    /**
     * @var list<AnimeFullStreamingItem>
     */
    protected $streaming;

    /**
     * MyAnimeList ID.
     */
    public function getMalId(): int
    {
        return $this->malId;
    }

    /**
     * MyAnimeList ID.
     */
    public function setMalId(int $malId): self
    {
        $this->initialized['malId'] = true;
        $this->malId = $malId;

        return $this;
    }

    /**
     * MyAnimeList URL.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * MyAnimeList URL.
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }

    public function getImages(): AnimeImages
    {
        return $this->images;
    }

    public function setImages(AnimeImages $images): self
    {
        $this->initialized['images'] = true;
        $this->images = $images;

        return $this;
    }

    /**
     * Youtube Details.
     */
    public function getTrailer(): TrailerBase
    {
        return $this->trailer;
    }

    /**
     * Youtube Details.
     */
    public function setTrailer(TrailerBase $trailer): self
    {
        $this->initialized['trailer'] = true;
        $this->trailer = $trailer;

        return $this;
    }

    /**
     * Whether the entry is pending approval on MAL or not.
     */
    public function getApproved(): bool
    {
        return $this->approved;
    }

    /**
     * Whether the entry is pending approval on MAL or not.
     */
    public function setApproved(bool $approved): self
    {
        $this->initialized['approved'] = true;
        $this->approved = $approved;

        return $this;
    }

    /**
     * All titles.
     *
     * @return list<Title>
     */
    public function getTitles(): array
    {
        return $this->titles;
    }

    /**
     * All titles.
     *
     * @param list<Title> $titles
     */
    public function setTitles(array $titles): self
    {
        $this->initialized['titles'] = true;
        $this->titles = $titles;

        return $this;
    }

    /**
     * Title.
     *
     * @deprecated
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Title.
     *
     * @deprecated
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }

    /**
     * English Title.
     *
     * @deprecated
     */
    public function getTitleEnglish(): ?string
    {
        return $this->titleEnglish;
    }

    /**
     * English Title.
     *
     * @deprecated
     */
    public function setTitleEnglish(?string $titleEnglish): self
    {
        $this->initialized['titleEnglish'] = true;
        $this->titleEnglish = $titleEnglish;

        return $this;
    }

    /**
     * Japanese Title.
     *
     * @deprecated
     */
    public function getTitleJapanese(): ?string
    {
        return $this->titleJapanese;
    }

    /**
     * Japanese Title.
     *
     * @deprecated
     */
    public function setTitleJapanese(?string $titleJapanese): self
    {
        $this->initialized['titleJapanese'] = true;
        $this->titleJapanese = $titleJapanese;

        return $this;
    }

    /**
     * Other Titles.
     *
     * @deprecated
     *
     * @return list<string>
     */
    public function getTitleSynonyms(): array
    {
        return $this->titleSynonyms;
    }

    /**
     * Other Titles.
     *
     * @param list<string> $titleSynonyms
     *
     * @deprecated
     */
    public function setTitleSynonyms(array $titleSynonyms): self
    {
        $this->initialized['titleSynonyms'] = true;
        $this->titleSynonyms = $titleSynonyms;

        return $this;
    }

    /**
     * Anime Type.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Anime Type.
     */
    public function setType(?string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Original Material/Source adapted from.
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * Original Material/Source adapted from.
     */
    public function setSource(?string $source): self
    {
        $this->initialized['source'] = true;
        $this->source = $source;

        return $this;
    }

    /**
     * Episode count.
     */
    public function getEpisodes(): ?int
    {
        return $this->episodes;
    }

    /**
     * Episode count.
     */
    public function setEpisodes(?int $episodes): self
    {
        $this->initialized['episodes'] = true;
        $this->episodes = $episodes;

        return $this;
    }

    /**
     * Airing status.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Airing status.
     */
    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * Airing boolean.
     */
    public function getAiring(): bool
    {
        return $this->airing;
    }

    /**
     * Airing boolean.
     */
    public function setAiring(bool $airing): self
    {
        $this->initialized['airing'] = true;
        $this->airing = $airing;

        return $this;
    }

    /**
     * Date range.
     */
    public function getAired(): Daterange
    {
        return $this->aired;
    }

    /**
     * Date range.
     */
    public function setAired(Daterange $aired): self
    {
        $this->initialized['aired'] = true;
        $this->aired = $aired;

        return $this;
    }

    /**
     * Parsed raw duration.
     */
    public function getDuration(): ?string
    {
        return $this->duration;
    }

    /**
     * Parsed raw duration.
     */
    public function setDuration(?string $duration): self
    {
        $this->initialized['duration'] = true;
        $this->duration = $duration;

        return $this;
    }

    /**
     * Anime audience rating.
     */
    public function getRating(): ?string
    {
        return $this->rating;
    }

    /**
     * Anime audience rating.
     */
    public function setRating(?string $rating): self
    {
        $this->initialized['rating'] = true;
        $this->rating = $rating;

        return $this;
    }

    /**
     * Score.
     */
    public function getScore(): ?float
    {
        return $this->score;
    }

    /**
     * Score.
     */
    public function setScore(?float $score): self
    {
        $this->initialized['score'] = true;
        $this->score = $score;

        return $this;
    }

    /**
     * Number of users.
     */
    public function getScoredBy(): ?int
    {
        return $this->scoredBy;
    }

    /**
     * Number of users.
     */
    public function setScoredBy(?int $scoredBy): self
    {
        $this->initialized['scoredBy'] = true;
        $this->scoredBy = $scoredBy;

        return $this;
    }

    /**
     * Ranking.
     */
    public function getRank(): ?int
    {
        return $this->rank;
    }

    /**
     * Ranking.
     */
    public function setRank(?int $rank): self
    {
        $this->initialized['rank'] = true;
        $this->rank = $rank;

        return $this;
    }

    /**
     * Popularity.
     */
    public function getPopularity(): ?int
    {
        return $this->popularity;
    }

    /**
     * Popularity.
     */
    public function setPopularity(?int $popularity): self
    {
        $this->initialized['popularity'] = true;
        $this->popularity = $popularity;

        return $this;
    }

    /**
     * Number of users who have added this entry to their list.
     */
    public function getMembers(): ?int
    {
        return $this->members;
    }

    /**
     * Number of users who have added this entry to their list.
     */
    public function setMembers(?int $members): self
    {
        $this->initialized['members'] = true;
        $this->members = $members;

        return $this;
    }

    /**
     * Number of users who have favorited this entry.
     */
    public function getFavorites(): ?int
    {
        return $this->favorites;
    }

    /**
     * Number of users who have favorited this entry.
     */
    public function setFavorites(?int $favorites): self
    {
        $this->initialized['favorites'] = true;
        $this->favorites = $favorites;

        return $this;
    }

    /**
     * Synopsis.
     */
    public function getSynopsis(): ?string
    {
        return $this->synopsis;
    }

    /**
     * Synopsis.
     */
    public function setSynopsis(?string $synopsis): self
    {
        $this->initialized['synopsis'] = true;
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * Background.
     */
    public function getBackground(): ?string
    {
        return $this->background;
    }

    /**
     * Background.
     */
    public function setBackground(?string $background): self
    {
        $this->initialized['background'] = true;
        $this->background = $background;

        return $this;
    }

    /**
     * Season.
     */
    public function getSeason(): ?string
    {
        return $this->season;
    }

    /**
     * Season.
     */
    public function setSeason(?string $season): self
    {
        $this->initialized['season'] = true;
        $this->season = $season;

        return $this;
    }

    /**
     * Year.
     */
    public function getYear(): ?int
    {
        return $this->year;
    }

    /**
     * Year.
     */
    public function setYear(?int $year): self
    {
        $this->initialized['year'] = true;
        $this->year = $year;

        return $this;
    }

    /**
     * Broadcast Details.
     */
    public function getBroadcast(): Broadcast
    {
        return $this->broadcast;
    }

    /**
     * Broadcast Details.
     */
    public function setBroadcast(Broadcast $broadcast): self
    {
        $this->initialized['broadcast'] = true;
        $this->broadcast = $broadcast;

        return $this;
    }

    /**
     * @return list<MalUrl>
     */
    public function getProducers(): array
    {
        return $this->producers;
    }

    /**
     * @param list<MalUrl> $producers
     */
    public function setProducers(array $producers): self
    {
        $this->initialized['producers'] = true;
        $this->producers = $producers;

        return $this;
    }

    /**
     * @return list<MalUrl>
     */
    public function getLicensors(): array
    {
        return $this->licensors;
    }

    /**
     * @param list<MalUrl> $licensors
     */
    public function setLicensors(array $licensors): self
    {
        $this->initialized['licensors'] = true;
        $this->licensors = $licensors;

        return $this;
    }

    /**
     * @return list<MalUrl>
     */
    public function getStudios(): array
    {
        return $this->studios;
    }

    /**
     * @param list<MalUrl> $studios
     */
    public function setStudios(array $studios): self
    {
        $this->initialized['studios'] = true;
        $this->studios = $studios;

        return $this;
    }

    /**
     * @return list<MalUrl>
     */
    public function getGenres(): array
    {
        return $this->genres;
    }

    /**
     * @param list<MalUrl> $genres
     */
    public function setGenres(array $genres): self
    {
        $this->initialized['genres'] = true;
        $this->genres = $genres;

        return $this;
    }

    /**
     * @return list<MalUrl>
     */
    public function getExplicitGenres(): array
    {
        return $this->explicitGenres;
    }

    /**
     * @param list<MalUrl> $explicitGenres
     */
    public function setExplicitGenres(array $explicitGenres): self
    {
        $this->initialized['explicitGenres'] = true;
        $this->explicitGenres = $explicitGenres;

        return $this;
    }

    /**
     * @return list<MalUrl>
     */
    public function getThemes(): array
    {
        return $this->themes;
    }

    /**
     * @param list<MalUrl> $themes
     */
    public function setThemes(array $themes): self
    {
        $this->initialized['themes'] = true;
        $this->themes = $themes;

        return $this;
    }

    /**
     * @return list<MalUrl>
     */
    public function getDemographics(): array
    {
        return $this->demographics;
    }

    /**
     * @param list<MalUrl> $demographics
     */
    public function setDemographics(array $demographics): self
    {
        $this->initialized['demographics'] = true;
        $this->demographics = $demographics;

        return $this;
    }

    /**
     * @return list<AnimeFullRelationsItem>
     */
    public function getRelations(): array
    {
        return $this->relations;
    }

    /**
     * @param list<AnimeFullRelationsItem> $relations
     */
    public function setRelations(array $relations): self
    {
        $this->initialized['relations'] = true;
        $this->relations = $relations;

        return $this;
    }

    public function getTheme(): AnimeFullTheme
    {
        return $this->theme;
    }

    public function setTheme(AnimeFullTheme $theme): self
    {
        $this->initialized['theme'] = true;
        $this->theme = $theme;

        return $this;
    }

    /**
     * @return list<AnimeFullExternalItem>
     */
    public function getExternal(): array
    {
        return $this->external;
    }

    /**
     * @param list<AnimeFullExternalItem> $external
     */
    public function setExternal(array $external): self
    {
        $this->initialized['external'] = true;
        $this->external = $external;

        return $this;
    }

    /**
     * @return list<AnimeFullStreamingItem>
     */
    public function getStreaming(): array
    {
        return $this->streaming;
    }

    /**
     * @param list<AnimeFullStreamingItem> $streaming
     */
    public function setStreaming(array $streaming): self
    {
        $this->initialized['streaming'] = true;
        $this->streaming = $streaming;

        return $this;
    }
}

<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeFull
{
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
    protected $approved = false;

    /**
     * All titles.
     *
     * @var string[]
     */
    protected $titles = [];

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
     * @var string[]
     */
    protected $titleSynonyms = [];

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
    protected $airing = false;

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
     * @var MalUrl[]
     */
    protected $producers = [];

    /**
     * @var MalUrl[]
     */
    protected $licensors = [];

    /**
     * @var MalUrl[]
     */
    protected $studios = [];

    /**
     * @var MalUrl[]
     */
    protected $genres = [];

    /**
     * @var MalUrl[]
     */
    protected $explicitGenres = [];

    /**
     * @var MalUrl[]
     */
    protected $themes = [];

    /**
     * @var MalUrl[]
     */
    protected $demographics = [];

    /**
     * @var AnimeFullRelationsItem[]
     */
    protected $relations = [];

    /**
     * @var AnimeFullTheme
     */
    protected $theme;

    /**
     * @var AnimeFullExternalItem[]
     */
    protected $external = [];

    /**
     * @var AnimeFullStreamingItem[]
     */
    protected $streaming = [];

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
        $this->url = $url;

        return $this;
    }

    public function getImages(): AnimeImages
    {
        return $this->images;
    }

    public function setImages(AnimeImages $animeImages): self
    {
        $this->images = $animeImages;

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
    public function setTrailer(TrailerBase $trailerBase): self
    {
        $this->trailer = $trailerBase;

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
        $this->approved = $approved;

        return $this;
    }

    /**
     * All titles.
     *
     * @return string[]
     */
    public function getTitles(): array
    {
        return $this->titles;
    }

    /**
     * All titles.
     *
     * @param string[] $titles
     */
    public function setTitles(array $titles): self
    {
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
        $this->titleJapanese = $titleJapanese;

        return $this;
    }

    /**
     * Other Titles.
     *
     * @deprecated
     *
     * @return string[]
     */
    public function getTitleSynonyms(): array
    {
        return $this->titleSynonyms;
    }

    /**
     * Other Titles.
     *
     * @param string[] $titleSynonyms
     *
     * @deprecated
     */
    public function setTitleSynonyms(array $titleSynonyms): self
    {
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
    public function setAired(Daterange $daterange): self
    {
        $this->aired = $daterange;

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
        $this->broadcast = $broadcast;

        return $this;
    }

    /**
     * @return MalUrl[]
     */
    public function getProducers(): array
    {
        return $this->producers;
    }

    /**
     * @param MalUrl[] $producers
     */
    public function setProducers(array $producers): self
    {
        $this->producers = $producers;

        return $this;
    }

    /**
     * @return MalUrl[]
     */
    public function getLicensors(): array
    {
        return $this->licensors;
    }

    /**
     * @param MalUrl[] $licensors
     */
    public function setLicensors(array $licensors): self
    {
        $this->licensors = $licensors;

        return $this;
    }

    /**
     * @return MalUrl[]
     */
    public function getStudios(): array
    {
        return $this->studios;
    }

    /**
     * @param MalUrl[] $studios
     */
    public function setStudios(array $studios): self
    {
        $this->studios = $studios;

        return $this;
    }

    /**
     * @return MalUrl[]
     */
    public function getGenres(): array
    {
        return $this->genres;
    }

    /**
     * @param MalUrl[] $genres
     */
    public function setGenres(array $genres): self
    {
        $this->genres = $genres;

        return $this;
    }

    /**
     * @return MalUrl[]
     */
    public function getExplicitGenres(): array
    {
        return $this->explicitGenres;
    }

    /**
     * @param MalUrl[] $explicitGenres
     */
    public function setExplicitGenres(array $explicitGenres): self
    {
        $this->explicitGenres = $explicitGenres;

        return $this;
    }

    /**
     * @return MalUrl[]
     */
    public function getThemes(): array
    {
        return $this->themes;
    }

    /**
     * @param MalUrl[] $themes
     */
    public function setThemes(array $themes): self
    {
        $this->themes = $themes;

        return $this;
    }

    /**
     * @return MalUrl[]
     */
    public function getDemographics(): array
    {
        return $this->demographics;
    }

    /**
     * @param MalUrl[] $demographics
     */
    public function setDemographics(array $demographics): self
    {
        $this->demographics = $demographics;

        return $this;
    }

    /**
     * @return AnimeFullRelationsItem[]
     */
    public function getRelations(): array
    {
        return $this->relations;
    }

    /**
     * @param AnimeFullRelationsItem[] $relations
     */
    public function setRelations(array $relations): self
    {
        $this->relations = $relations;

        return $this;
    }

    public function getTheme(): AnimeFullTheme
    {
        return $this->theme;
    }

    public function setTheme(AnimeFullTheme $animeFullTheme): self
    {
        $this->theme = $animeFullTheme;

        return $this;
    }

    /**
     * @return AnimeFullExternalItem[]
     */
    public function getExternal(): array
    {
        return $this->external;
    }

    /**
     * @param AnimeFullExternalItem[] $external
     */
    public function setExternal(array $external): self
    {
        $this->external = $external;

        return $this;
    }

    /**
     * @return AnimeFullStreamingItem[]
     */
    public function getStreaming(): array
    {
        return $this->streaming;
    }

    /**
     * @param AnimeFullStreamingItem[] $streaming
     */
    public function setStreaming(array $streaming): self
    {
        $this->streaming = $streaming;

        return $this;
    }
}

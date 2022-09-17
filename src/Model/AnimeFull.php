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
    protected $approved;
    /**
     * All titles.
     *
     * @var string[]
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
     * @var string[]
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
     * @var MalUrl[]
     */
    protected $producers;
    /**
     * @var MalUrl[]
     */
    protected $licensors;
    /**
     * @var MalUrl[]
     */
    protected $studios;
    /**
     * @var MalUrl[]
     */
    protected $genres;
    /**
     * @var MalUrl[]
     */
    protected $explicitGenres;
    /**
     * @var MalUrl[]
     */
    protected $themes;
    /**
     * @var MalUrl[]
     */
    protected $demographics;
    /**
     * @var AnimeFullRelationsItem[]
     */
    protected $relations;
    /**
     * @var AnimeFullTheme
     */
    protected $theme;
    /**
     * @var AnimeFullExternalItem[]
     */
    protected $external;
    /**
     * @var AnimeFullStreamingItem[]
     */
    protected $streaming;

    /**
     * MyAnimeList ID.
     *
     * @return int
     */
    public function getMalId(): int
    {
        return $this->malId;
    }

    /**
     * MyAnimeList ID.
     *
     * @param int $malId
     *
     * @return self
     */
    public function setMalId(int $malId): self
    {
        $this->malId = $malId;

        return $this;
    }

    /**
     * MyAnimeList URL.
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * MyAnimeList URL.
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return AnimeImages
     */
    public function getImages(): AnimeImages
    {
        return $this->images;
    }

    /**
     * @param AnimeImages $images
     *
     * @return self
     */
    public function setImages(AnimeImages $images): self
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Youtube Details.
     *
     * @return TrailerBase
     */
    public function getTrailer(): TrailerBase
    {
        return $this->trailer;
    }

    /**
     * Youtube Details.
     *
     * @param TrailerBase $trailer
     *
     * @return self
     */
    public function setTrailer(TrailerBase $trailer): self
    {
        $this->trailer = $trailer;

        return $this;
    }

    /**
     * Whether the entry is pending approval on MAL or not.
     *
     * @return bool
     */
    public function getApproved(): bool
    {
        return $this->approved;
    }

    /**
     * Whether the entry is pending approval on MAL or not.
     *
     * @param bool $approved
     *
     * @return self
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
     *
     * @return self
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
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Title.
     *
     * @param string $title
     *
     * @deprecated
     *
     * @return self
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
     *
     * @return string|null
     */
    public function getTitleEnglish(): ?string
    {
        return $this->titleEnglish;
    }

    /**
     * English Title.
     *
     * @param string|null $titleEnglish
     *
     * @deprecated
     *
     * @return self
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
     *
     * @return string|null
     */
    public function getTitleJapanese(): ?string
    {
        return $this->titleJapanese;
    }

    /**
     * Japanese Title.
     *
     * @param string|null $titleJapanese
     *
     * @deprecated
     *
     * @return self
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
     *
     * @return self
     */
    public function setTitleSynonyms(array $titleSynonyms): self
    {
        $this->titleSynonyms = $titleSynonyms;

        return $this;
    }

    /**
     * Anime Type.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Anime Type.
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Original Material/Source adapted from.
     *
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * Original Material/Source adapted from.
     *
     * @param string|null $source
     *
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Episode count.
     *
     * @return int|null
     */
    public function getEpisodes(): ?int
    {
        return $this->episodes;
    }

    /**
     * Episode count.
     *
     * @param int|null $episodes
     *
     * @return self
     */
    public function setEpisodes(?int $episodes): self
    {
        $this->episodes = $episodes;

        return $this;
    }

    /**
     * Airing status.
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Airing status.
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Airing boolean.
     *
     * @return bool
     */
    public function getAiring(): bool
    {
        return $this->airing;
    }

    /**
     * Airing boolean.
     *
     * @param bool $airing
     *
     * @return self
     */
    public function setAiring(bool $airing): self
    {
        $this->airing = $airing;

        return $this;
    }

    /**
     * Date range.
     *
     * @return Daterange
     */
    public function getAired(): Daterange
    {
        return $this->aired;
    }

    /**
     * Date range.
     *
     * @param Daterange $aired
     *
     * @return self
     */
    public function setAired(Daterange $aired): self
    {
        $this->aired = $aired;

        return $this;
    }

    /**
     * Parsed raw duration.
     *
     * @return string|null
     */
    public function getDuration(): ?string
    {
        return $this->duration;
    }

    /**
     * Parsed raw duration.
     *
     * @param string|null $duration
     *
     * @return self
     */
    public function setDuration(?string $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Anime audience rating.
     *
     * @return string|null
     */
    public function getRating(): ?string
    {
        return $this->rating;
    }

    /**
     * Anime audience rating.
     *
     * @param string|null $rating
     *
     * @return self
     */
    public function setRating(?string $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Score.
     *
     * @return float|null
     */
    public function getScore(): ?float
    {
        return $this->score;
    }

    /**
     * Score.
     *
     * @param float|null $score
     *
     * @return self
     */
    public function setScore(?float $score): self
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Number of users.
     *
     * @return int|null
     */
    public function getScoredBy(): ?int
    {
        return $this->scoredBy;
    }

    /**
     * Number of users.
     *
     * @param int|null $scoredBy
     *
     * @return self
     */
    public function setScoredBy(?int $scoredBy): self
    {
        $this->scoredBy = $scoredBy;

        return $this;
    }

    /**
     * Ranking.
     *
     * @return int|null
     */
    public function getRank(): ?int
    {
        return $this->rank;
    }

    /**
     * Ranking.
     *
     * @param int|null $rank
     *
     * @return self
     */
    public function setRank(?int $rank): self
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * Popularity.
     *
     * @return int|null
     */
    public function getPopularity(): ?int
    {
        return $this->popularity;
    }

    /**
     * Popularity.
     *
     * @param int|null $popularity
     *
     * @return self
     */
    public function setPopularity(?int $popularity): self
    {
        $this->popularity = $popularity;

        return $this;
    }

    /**
     * Number of users who have added this entry to their list.
     *
     * @return int|null
     */
    public function getMembers(): ?int
    {
        return $this->members;
    }

    /**
     * Number of users who have added this entry to their list.
     *
     * @param int|null $members
     *
     * @return self
     */
    public function setMembers(?int $members): self
    {
        $this->members = $members;

        return $this;
    }

    /**
     * Number of users who have favorited this entry.
     *
     * @return int|null
     */
    public function getFavorites(): ?int
    {
        return $this->favorites;
    }

    /**
     * Number of users who have favorited this entry.
     *
     * @param int|null $favorites
     *
     * @return self
     */
    public function setFavorites(?int $favorites): self
    {
        $this->favorites = $favorites;

        return $this;
    }

    /**
     * Synopsis.
     *
     * @return string|null
     */
    public function getSynopsis(): ?string
    {
        return $this->synopsis;
    }

    /**
     * Synopsis.
     *
     * @param string|null $synopsis
     *
     * @return self
     */
    public function setSynopsis(?string $synopsis): self
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * Background.
     *
     * @return string|null
     */
    public function getBackground(): ?string
    {
        return $this->background;
    }

    /**
     * Background.
     *
     * @param string|null $background
     *
     * @return self
     */
    public function setBackground(?string $background): self
    {
        $this->background = $background;

        return $this;
    }

    /**
     * Season.
     *
     * @return string|null
     */
    public function getSeason(): ?string
    {
        return $this->season;
    }

    /**
     * Season.
     *
     * @param string|null $season
     *
     * @return self
     */
    public function setSeason(?string $season): self
    {
        $this->season = $season;

        return $this;
    }

    /**
     * Year.
     *
     * @return int|null
     */
    public function getYear(): ?int
    {
        return $this->year;
    }

    /**
     * Year.
     *
     * @param int|null $year
     *
     * @return self
     */
    public function setYear(?int $year): self
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Broadcast Details.
     *
     * @return Broadcast
     */
    public function getBroadcast(): Broadcast
    {
        return $this->broadcast;
    }

    /**
     * Broadcast Details.
     *
     * @param Broadcast $broadcast
     *
     * @return self
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
     *
     * @return self
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
     *
     * @return self
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
     *
     * @return self
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
     *
     * @return self
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
     *
     * @return self
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
     *
     * @return self
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
     *
     * @return self
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
     *
     * @return self
     */
    public function setRelations(array $relations): self
    {
        $this->relations = $relations;

        return $this;
    }

    /**
     * @return AnimeFullTheme
     */
    public function getTheme(): AnimeFullTheme
    {
        return $this->theme;
    }

    /**
     * @param AnimeFullTheme $theme
     *
     * @return self
     */
    public function setTheme(AnimeFullTheme $theme): self
    {
        $this->theme = $theme;

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
     *
     * @return self
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
     *
     * @return self
     */
    public function setStreaming(array $streaming): self
    {
        $this->streaming = $streaming;

        return $this;
    }
}

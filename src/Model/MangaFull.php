<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class MangaFull
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
     * @var MangaImages
     */
    protected $images;
    /**
     * Whether the entry is pending approval on MAL or not.
     *
     * @var bool
     */
    protected $approved;
    /**
     * All Titles.
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
     * Manga Type.
     *
     * @var string|null
     */
    protected $type;
    /**
     * Chapter count.
     *
     * @var int|null
     */
    protected $chapters;
    /**
     * Volume count.
     *
     * @var int|null
     */
    protected $volumes;
    /**
     * Publishing status.
     *
     * @var string
     */
    protected $status;
    /**
     * Publishing boolean.
     *
     * @var bool
     */
    protected $publishing;
    /**
     * Date range.
     *
     * @var Daterange
     */
    protected $published;
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
     * @var MalUrl[]
     */
    protected $authors;
    /**
     * @var MalUrl[]
     */
    protected $serializations;
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
     * @var MangaFullRelationsItem[]
     */
    protected $relations;
    /**
     * @var MangaFullExternalItem[]
     */
    protected $external;

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
     * @return MangaImages
     */
    public function getImages(): MangaImages
    {
        return $this->images;
    }

    /**
     * @param MangaImages $images
     *
     * @return self
     */
    public function setImages(MangaImages $images): self
    {
        $this->images = $images;

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
     * All Titles.
     *
     * @return string[]
     */
    public function getTitles(): array
    {
        return $this->titles;
    }

    /**
     * All Titles.
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
     * Manga Type.
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Manga Type.
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
     * Chapter count.
     *
     * @return int|null
     */
    public function getChapters(): ?int
    {
        return $this->chapters;
    }

    /**
     * Chapter count.
     *
     * @param int|null $chapters
     *
     * @return self
     */
    public function setChapters(?int $chapters): self
    {
        $this->chapters = $chapters;

        return $this;
    }

    /**
     * Volume count.
     *
     * @return int|null
     */
    public function getVolumes(): ?int
    {
        return $this->volumes;
    }

    /**
     * Volume count.
     *
     * @param int|null $volumes
     *
     * @return self
     */
    public function setVolumes(?int $volumes): self
    {
        $this->volumes = $volumes;

        return $this;
    }

    /**
     * Publishing status.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Publishing status.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Publishing boolean.
     *
     * @return bool
     */
    public function getPublishing(): bool
    {
        return $this->publishing;
    }

    /**
     * Publishing boolean.
     *
     * @param bool $publishing
     *
     * @return self
     */
    public function setPublishing(bool $publishing): self
    {
        $this->publishing = $publishing;

        return $this;
    }

    /**
     * Date range.
     *
     * @return Daterange
     */
    public function getPublished(): Daterange
    {
        return $this->published;
    }

    /**
     * Date range.
     *
     * @param Daterange $published
     *
     * @return self
     */
    public function setPublished(Daterange $published): self
    {
        $this->published = $published;

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
     * @return MalUrl[]
     */
    public function getAuthors(): array
    {
        return $this->authors;
    }

    /**
     * @param MalUrl[] $authors
     *
     * @return self
     */
    public function setAuthors(array $authors): self
    {
        $this->authors = $authors;

        return $this;
    }

    /**
     * @return MalUrl[]
     */
    public function getSerializations(): array
    {
        return $this->serializations;
    }

    /**
     * @param MalUrl[] $serializations
     *
     * @return self
     */
    public function setSerializations(array $serializations): self
    {
        $this->serializations = $serializations;

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
     * @return MangaFullRelationsItem[]
     */
    public function getRelations(): array
    {
        return $this->relations;
    }

    /**
     * @param MangaFullRelationsItem[] $relations
     *
     * @return self
     */
    public function setRelations(array $relations): self
    {
        $this->relations = $relations;

        return $this;
    }

    /**
     * @return MangaFullExternalItem[]
     */
    public function getExternal(): array
    {
        return $this->external;
    }

    /**
     * @param MangaFullExternalItem[] $external
     *
     * @return self
     */
    public function setExternal(array $external): self
    {
        $this->external = $external;

        return $this;
    }
}

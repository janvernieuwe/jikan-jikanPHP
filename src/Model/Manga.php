<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class Manga
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
    protected $approved = false;

    /**
     * All Titles.
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
    protected $publishing = false;

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
    protected $authors = [];

    /**
     * @var MalUrl[]
     */
    protected $serializations = [];

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

    public function getImages(): MangaImages
    {
        return $this->images;
    }

    public function setImages(MangaImages $mangaImages): self
    {
        $this->images = $mangaImages;

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
     * Manga Type.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Manga Type.
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Chapter count.
     */
    public function getChapters(): ?int
    {
        return $this->chapters;
    }

    /**
     * Chapter count.
     */
    public function setChapters(?int $chapters): self
    {
        $this->chapters = $chapters;

        return $this;
    }

    /**
     * Volume count.
     */
    public function getVolumes(): ?int
    {
        return $this->volumes;
    }

    /**
     * Volume count.
     */
    public function setVolumes(?int $volumes): self
    {
        $this->volumes = $volumes;

        return $this;
    }

    /**
     * Publishing status.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Publishing status.
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Publishing boolean.
     */
    public function getPublishing(): bool
    {
        return $this->publishing;
    }

    /**
     * Publishing boolean.
     */
    public function setPublishing(bool $publishing): self
    {
        $this->publishing = $publishing;

        return $this;
    }

    /**
     * Date range.
     */
    public function getPublished(): Daterange
    {
        return $this->published;
    }

    /**
     * Date range.
     */
    public function setPublished(Daterange $daterange): self
    {
        $this->published = $daterange;

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
     * @return MalUrl[]
     */
    public function getAuthors(): array
    {
        return $this->authors;
    }

    /**
     * @param MalUrl[] $authors
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
}

<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class Manga extends \ArrayObject
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
     * @var list<MalUrl>
     */
    protected $authors;

    /**
     * @var list<MalUrl>
     */
    protected $serializations;

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

    public function getImages(): MangaImages
    {
        return $this->images;
    }

    public function setImages(MangaImages $images): self
    {
        $this->initialized['images'] = true;
        $this->images = $images;

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
     * All Titles.
     *
     * @return list<Title>
     */
    public function getTitles(): array
    {
        return $this->titles;
    }

    /**
     * All Titles.
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
        $this->initialized['type'] = true;
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
        $this->initialized['chapters'] = true;
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
        $this->initialized['volumes'] = true;
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
        $this->initialized['status'] = true;
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
        $this->initialized['publishing'] = true;
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
    public function setPublished(Daterange $published): self
    {
        $this->initialized['published'] = true;
        $this->published = $published;

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
     * @return list<MalUrl>
     */
    public function getAuthors(): array
    {
        return $this->authors;
    }

    /**
     * @param list<MalUrl> $authors
     */
    public function setAuthors(array $authors): self
    {
        $this->initialized['authors'] = true;
        $this->authors = $authors;

        return $this;
    }

    /**
     * @return list<MalUrl>
     */
    public function getSerializations(): array
    {
        return $this->serializations;
    }

    /**
     * @param list<MalUrl> $serializations
     */
    public function setSerializations(array $serializations): self
    {
        $this->initialized['serializations'] = true;
        $this->serializations = $serializations;

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
}

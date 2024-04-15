<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeEpisodesdataItem extends \ArrayObject
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
     * MyAnimeList URL. This is the URL of the episode's video. If there is no video url, this will be null.
     *
     * @var string|null
     */
    protected $url;

    /**
     * Title.
     *
     * @var string
     */
    protected $title;

    /**
     * Title Japanese.
     *
     * @var string|null
     */
    protected $titleJapanese;

    /**
     * title_romanji.
     *
     * @var string|null
     */
    protected $titleRomanji;

    /**
     * Episode duration in seconds.
     *
     * @var int|null
     */
    protected $duration;

    /**
     * Aired Date ISO8601.
     *
     * @var string|null
     */
    protected $aired;

    /**
     * Filler episode.
     *
     * @var bool
     */
    protected $filler;

    /**
     * Recap episode.
     *
     * @var bool
     */
    protected $recap;

    /**
     * Episode discussion forum URL.
     *
     * @var string|null
     */
    protected $forumUrl;

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
     * MyAnimeList URL. This is the URL of the episode's video. If there is no video url, this will be null.
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * MyAnimeList URL. This is the URL of the episode's video. If there is no video url, this will be null.
     */
    public function setUrl(?string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }

    /**
     * Title.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Title.
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }

    /**
     * Title Japanese.
     */
    public function getTitleJapanese(): ?string
    {
        return $this->titleJapanese;
    }

    /**
     * Title Japanese.
     */
    public function setTitleJapanese(?string $titleJapanese): self
    {
        $this->initialized['titleJapanese'] = true;
        $this->titleJapanese = $titleJapanese;

        return $this;
    }

    /**
     * title_romanji.
     */
    public function getTitleRomanji(): ?string
    {
        return $this->titleRomanji;
    }

    /**
     * title_romanji.
     */
    public function setTitleRomanji(?string $titleRomanji): self
    {
        $this->initialized['titleRomanji'] = true;
        $this->titleRomanji = $titleRomanji;

        return $this;
    }

    /**
     * Episode duration in seconds.
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }

    /**
     * Episode duration in seconds.
     */
    public function setDuration(?int $duration): self
    {
        $this->initialized['duration'] = true;
        $this->duration = $duration;

        return $this;
    }

    /**
     * Aired Date ISO8601.
     */
    public function getAired(): ?string
    {
        return $this->aired;
    }

    /**
     * Aired Date ISO8601.
     */
    public function setAired(?string $aired): self
    {
        $this->initialized['aired'] = true;
        $this->aired = $aired;

        return $this;
    }

    /**
     * Filler episode.
     */
    public function getFiller(): bool
    {
        return $this->filler;
    }

    /**
     * Filler episode.
     */
    public function setFiller(bool $filler): self
    {
        $this->initialized['filler'] = true;
        $this->filler = $filler;

        return $this;
    }

    /**
     * Recap episode.
     */
    public function getRecap(): bool
    {
        return $this->recap;
    }

    /**
     * Recap episode.
     */
    public function setRecap(bool $recap): self
    {
        $this->initialized['recap'] = true;
        $this->recap = $recap;

        return $this;
    }

    /**
     * Episode discussion forum URL.
     */
    public function getForumUrl(): ?string
    {
        return $this->forumUrl;
    }

    /**
     * Episode discussion forum URL.
     */
    public function setForumUrl(?string $forumUrl): self
    {
        $this->initialized['forumUrl'] = true;
        $this->forumUrl = $forumUrl;

        return $this;
    }
}

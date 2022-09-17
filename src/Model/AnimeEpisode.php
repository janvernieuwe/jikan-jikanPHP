<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeEpisode
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
     * Episode Synopsis.
     *
     * @var string|null
     */
    protected $synopsis;

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
     * Title.
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
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Title Japanese.
     *
     * @return string|null
     */
    public function getTitleJapanese(): ?string
    {
        return $this->titleJapanese;
    }

    /**
     * Title Japanese.
     *
     * @param string|null $titleJapanese
     *
     * @return self
     */
    public function setTitleJapanese(?string $titleJapanese): self
    {
        $this->titleJapanese = $titleJapanese;

        return $this;
    }

    /**
     * title_romanji.
     *
     * @return string|null
     */
    public function getTitleRomanji(): ?string
    {
        return $this->titleRomanji;
    }

    /**
     * title_romanji.
     *
     * @param string|null $titleRomanji
     *
     * @return self
     */
    public function setTitleRomanji(?string $titleRomanji): self
    {
        $this->titleRomanji = $titleRomanji;

        return $this;
    }

    /**
     * Episode duration in seconds.
     *
     * @return int|null
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }

    /**
     * Episode duration in seconds.
     *
     * @param int|null $duration
     *
     * @return self
     */
    public function setDuration(?int $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Aired Date ISO8601.
     *
     * @return string|null
     */
    public function getAired(): ?string
    {
        return $this->aired;
    }

    /**
     * Aired Date ISO8601.
     *
     * @param string|null $aired
     *
     * @return self
     */
    public function setAired(?string $aired): self
    {
        $this->aired = $aired;

        return $this;
    }

    /**
     * Filler episode.
     *
     * @return bool
     */
    public function getFiller(): bool
    {
        return $this->filler;
    }

    /**
     * Filler episode.
     *
     * @param bool $filler
     *
     * @return self
     */
    public function setFiller(bool $filler): self
    {
        $this->filler = $filler;

        return $this;
    }

    /**
     * Recap episode.
     *
     * @return bool
     */
    public function getRecap(): bool
    {
        return $this->recap;
    }

    /**
     * Recap episode.
     *
     * @param bool $recap
     *
     * @return self
     */
    public function setRecap(bool $recap): self
    {
        $this->recap = $recap;

        return $this;
    }

    /**
     * Episode Synopsis.
     *
     * @return string|null
     */
    public function getSynopsis(): ?string
    {
        return $this->synopsis;
    }

    /**
     * Episode Synopsis.
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
}

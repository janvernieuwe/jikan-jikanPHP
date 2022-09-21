<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class WatchEpisodesdataItemEpisodesItem
{
    /**
     * MyAnimeList ID.
     *
     * @var string
     */
    protected $malId;

    /**
     * MyAnimeList URL.
     *
     * @var string
     */
    protected $url;

    /**
     * Episode Title.
     *
     * @var string
     */
    protected $title;

    /**
     * For MyAnimeList Premium Users.
     *
     * @var bool
     */
    protected $premium = false;

    /**
     * MyAnimeList ID.
     */
    public function getMalId(): string
    {
        return $this->malId;
    }

    /**
     * MyAnimeList ID.
     */
    public function setMalId(string $malId): self
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

    /**
     * Episode Title.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Episode Title.
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * For MyAnimeList Premium Users.
     */
    public function getPremium(): bool
    {
        return $this->premium;
    }

    /**
     * For MyAnimeList Premium Users.
     */
    public function setPremium(bool $premium): self
    {
        $this->premium = $premium;

        return $this;
    }
}

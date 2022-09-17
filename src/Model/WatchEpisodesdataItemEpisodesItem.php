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
    protected $premium;

    /**
     * MyAnimeList ID.
     *
     * @return string
     */
    public function getMalId(): string
    {
        return $this->malId;
    }

    /**
     * MyAnimeList ID.
     *
     * @param string $malId
     *
     * @return self
     */
    public function setMalId(string $malId): self
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
     * Episode Title.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Episode Title.
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
     * For MyAnimeList Premium Users.
     *
     * @return bool
     */
    public function getPremium(): bool
    {
        return $this->premium;
    }

    /**
     * For MyAnimeList Premium Users.
     *
     * @param bool $premium
     *
     * @return self
     */
    public function setPremium(bool $premium): self
    {
        $this->premium = $premium;

        return $this;
    }
}

<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class WatchEpisodesdataItemEpisodesItem extends \ArrayObject
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
        $this->initialized['title'] = true;
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
        $this->initialized['premium'] = true;
        $this->premium = $premium;

        return $this;
    }
}

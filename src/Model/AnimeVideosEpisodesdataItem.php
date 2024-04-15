<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class AnimeVideosEpisodesdataItem extends ArrayObject
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
     * MyAnimeList ID or Episode Number.
     *
     * @var int
     */
    protected $malId;

    /**
     * Episode Title.
     *
     * @var string
     */
    protected $title;

    /**
     * Episode Subtitle.
     *
     * @var string
     */
    protected $episode;

    /**
     * Episode Page URL.
     *
     * @var string
     */
    protected $url;

    /**
     * @var CommonImages
     */
    protected $images;

    /**
     * MyAnimeList ID or Episode Number.
     */
    public function getMalId(): int
    {
        return $this->malId;
    }

    /**
     * MyAnimeList ID or Episode Number.
     */
    public function setMalId(int $malId): self
    {
        $this->initialized['malId'] = true;
        $this->malId = $malId;

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
     * Episode Subtitle.
     */
    public function getEpisode(): string
    {
        return $this->episode;
    }

    /**
     * Episode Subtitle.
     */
    public function setEpisode(string $episode): self
    {
        $this->initialized['episode'] = true;
        $this->episode = $episode;

        return $this;
    }

    /**
     * Episode Page URL.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Episode Page URL.
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }

    public function getImages(): CommonImages
    {
        return $this->images;
    }

    public function setImages(CommonImages $images): self
    {
        $this->initialized['images'] = true;
        $this->images = $images;

        return $this;
    }
}

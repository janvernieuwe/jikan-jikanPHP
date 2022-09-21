<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeVideosDataEpisodesItem
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
     * Episode.
     *
     * @var string
     */
    protected $episode;

    /**
     * @var CommonImages
     */
    protected $images;

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
        $this->title = $title;

        return $this;
    }

    /**
     * Episode.
     */
    public function getEpisode(): string
    {
        return $this->episode;
    }

    /**
     * Episode.
     */
    public function setEpisode(string $episode): self
    {
        $this->episode = $episode;

        return $this;
    }

    public function getImages(): CommonImages
    {
        return $this->images;
    }

    public function setImages(CommonImages $commonImages): self
    {
        $this->images = $commonImages;

        return $this;
    }
}

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
     * Episode.
     *
     * @return string
     */
    public function getEpisode(): string
    {
        return $this->episode;
    }

    /**
     * Episode.
     *
     * @param string $episode
     *
     * @return self
     */
    public function setEpisode(string $episode): self
    {
        $this->episode = $episode;

        return $this;
    }

    /**
     * @return CommonImages
     */
    public function getImages(): CommonImages
    {
        return $this->images;
    }

    /**
     * @param CommonImages $images
     *
     * @return self
     */
    public function setImages(CommonImages $images): self
    {
        $this->images = $images;

        return $this;
    }
}

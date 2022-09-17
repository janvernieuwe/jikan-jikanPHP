<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeVideosEpisodesdataItem
{
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
     *
     * @return int
     */
    public function getMalId(): int
    {
        return $this->malId;
    }

    /**
     * MyAnimeList ID or Episode Number.
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
     * Episode Subtitle.
     *
     * @return string
     */
    public function getEpisode(): string
    {
        return $this->episode;
    }

    /**
     * Episode Subtitle.
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
     * Episode Page URL.
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Episode Page URL.
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

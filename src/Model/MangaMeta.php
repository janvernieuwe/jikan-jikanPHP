<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class MangaMeta
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
     * @var MangaImages
     */
    protected $images;

    /**
     * Entry title.
     *
     * @var string
     */
    protected $title;

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

    public function getImages(): MangaImages
    {
        return $this->images;
    }

    public function setImages(MangaImages $mangaImages): self
    {
        $this->images = $mangaImages;

        return $this;
    }

    /**
     * Entry title.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Entry title.
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
}

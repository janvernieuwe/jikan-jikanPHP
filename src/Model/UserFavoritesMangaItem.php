<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UserFavoritesMangaItem
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @var int
     */
    protected $startYear;
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
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return int
     */
    public function getStartYear(): int
    {
        return $this->startYear;
    }

    /**
     * @param int $startYear
     *
     * @return self
     */
    public function setStartYear(int $startYear): self
    {
        $this->startYear = $startYear;

        return $this;
    }

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
     * @return MangaImages
     */
    public function getImages(): MangaImages
    {
        return $this->images;
    }

    /**
     * @param MangaImages $images
     *
     * @return self
     */
    public function setImages(MangaImages $images): self
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Entry title.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Entry title.
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
}

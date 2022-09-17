<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeMeta
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
     * @var AnimeImages
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
     * @return AnimeImages
     */
    public function getImages(): AnimeImages
    {
        return $this->images;
    }

    /**
     * @param AnimeImages $images
     *
     * @return self
     */
    public function setImages(AnimeImages $images): self
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

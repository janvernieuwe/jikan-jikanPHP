<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class EntryMeta
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
     * Image URL.
     *
     * @var string
     */
    protected $imageUrl;

    /**
     * Entry Name/Title.
     *
     * @var string
     */
    protected $name;

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
     * Image URL.
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    /**
     * Image URL.
     */
    public function setImageUrl(string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * Entry Name/Title.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Entry Name/Title.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}

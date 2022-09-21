<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class PersonMeta
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
     * @var PeopleImages
     */
    protected $images;

    /**
     * Entry name.
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

    public function getImages(): PeopleImages
    {
        return $this->images;
    }

    public function setImages(PeopleImages $peopleImages): self
    {
        $this->images = $peopleImages;

        return $this;
    }

    /**
     * Entry name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Entry name.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}

<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeStaffDataItemPerson extends \ArrayObject
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
     * Name.
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

    public function getImages(): PeopleImages
    {
        return $this->images;
    }

    public function setImages(PeopleImages $images): self
    {
        $this->initialized['images'] = true;
        $this->images = $images;

        return $this;
    }

    /**
     * Name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }
}

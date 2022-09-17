<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeStaffDataItemPerson
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
     * Name.
     *
     * @var string
     */
    protected $name;

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
     * @return PeopleImages
     */
    public function getImages(): PeopleImages
    {
        return $this->images;
    }

    /**
     * @param PeopleImages $images
     *
     * @return self
     */
    public function setImages(PeopleImages $images): self
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}

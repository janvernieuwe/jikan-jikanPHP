<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class Producer extends \ArrayObject
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
     * All titles.
     *
     * @var list<Title>
     */
    protected $titles;

    /**
     * @var CommonImages
     */
    protected $images;

    /**
     * Producers's member favorites count.
     *
     * @var int
     */
    protected $favorites;

    /**
     * Producers's anime count.
     *
     * @var int
     */
    protected $count;

    /**
     * Established Date ISO8601.
     *
     * @var string|null
     */
    protected $established;

    /**
     * About the Producer.
     *
     * @var string|null
     */
    protected $about;

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

    /**
     * All titles.
     *
     * @return list<Title>
     */
    public function getTitles(): array
    {
        return $this->titles;
    }

    /**
     * All titles.
     *
     * @param list<Title> $titles
     */
    public function setTitles(array $titles): self
    {
        $this->initialized['titles'] = true;
        $this->titles = $titles;

        return $this;
    }

    public function getImages(): CommonImages
    {
        return $this->images;
    }

    public function setImages(CommonImages $images): self
    {
        $this->initialized['images'] = true;
        $this->images = $images;

        return $this;
    }

    /**
     * Producers's member favorites count.
     */
    public function getFavorites(): int
    {
        return $this->favorites;
    }

    /**
     * Producers's member favorites count.
     */
    public function setFavorites(int $favorites): self
    {
        $this->initialized['favorites'] = true;
        $this->favorites = $favorites;

        return $this;
    }

    /**
     * Producers's anime count.
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * Producers's anime count.
     */
    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;

        return $this;
    }

    /**
     * Established Date ISO8601.
     */
    public function getEstablished(): ?string
    {
        return $this->established;
    }

    /**
     * Established Date ISO8601.
     */
    public function setEstablished(?string $established): self
    {
        $this->initialized['established'] = true;
        $this->established = $established;

        return $this;
    }

    /**
     * About the Producer.
     */
    public function getAbout(): ?string
    {
        return $this->about;
    }

    /**
     * About the Producer.
     */
    public function setAbout(?string $about): self
    {
        $this->initialized['about'] = true;
        $this->about = $about;

        return $this;
    }
}

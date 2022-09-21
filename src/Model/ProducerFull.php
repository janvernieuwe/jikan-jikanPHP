<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class ProducerFull
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
     * All titles.
     *
     * @var string[]
     */
    protected $titles = [];

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
     * @var ProducerFullExternalItem[]
     */
    protected $external = [];

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
     * All titles.
     *
     * @return string[]
     */
    public function getTitles(): array
    {
        return $this->titles;
    }

    /**
     * All titles.
     *
     * @param string[] $titles
     */
    public function setTitles(array $titles): self
    {
        $this->titles = $titles;

        return $this;
    }

    public function getImages(): CommonImages
    {
        return $this->images;
    }

    public function setImages(CommonImages $commonImages): self
    {
        $this->images = $commonImages;

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
        $this->about = $about;

        return $this;
    }

    /**
     * @return ProducerFullExternalItem[]
     */
    public function getExternal(): array
    {
        return $this->external;
    }

    /**
     * @param ProducerFullExternalItem[] $external
     */
    public function setExternal(array $external): self
    {
        $this->external = $external;

        return $this;
    }
}

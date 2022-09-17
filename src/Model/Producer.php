<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class Producer
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
     *
     * @return self
     */
    public function setTitles(array $titles): self
    {
        $this->titles = $titles;

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

    /**
     * Producers's member favorites count.
     *
     * @return int
     */
    public function getFavorites(): int
    {
        return $this->favorites;
    }

    /**
     * Producers's member favorites count.
     *
     * @param int $favorites
     *
     * @return self
     */
    public function setFavorites(int $favorites): self
    {
        $this->favorites = $favorites;

        return $this;
    }

    /**
     * Producers's anime count.
     *
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * Producers's anime count.
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count): self
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Established Date ISO8601.
     *
     * @return string|null
     */
    public function getEstablished(): ?string
    {
        return $this->established;
    }

    /**
     * Established Date ISO8601.
     *
     * @param string|null $established
     *
     * @return self
     */
    public function setEstablished(?string $established): self
    {
        $this->established = $established;

        return $this;
    }

    /**
     * About the Producer.
     *
     * @return string|null
     */
    public function getAbout(): ?string
    {
        return $this->about;
    }

    /**
     * About the Producer.
     *
     * @param string|null $about
     *
     * @return self
     */
    public function setAbout(?string $about): self
    {
        $this->about = $about;

        return $this;
    }
}

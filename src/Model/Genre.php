<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class Genre
{
    /**
     * MyAnimeList ID.
     *
     * @var int
     */
    protected $malId;

    /**
     * Genre Name.
     *
     * @var string
     */
    protected $name;

    /**
     * MyAnimeList URL.
     *
     * @var string
     */
    protected $url;

    /**
     * Genre's entry count.
     *
     * @var int
     */
    protected $count;

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
     * Genre Name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Genre Name.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

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
     * Genre's entry count.
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * Genre's entry count.
     */
    public function setCount(int $count): self
    {
        $this->count = $count;

        return $this;
    }
}

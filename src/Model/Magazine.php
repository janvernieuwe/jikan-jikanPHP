<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class Magazine
{
    /**
     * MyAnimeList ID.
     *
     * @var int
     */
    protected $malId;

    /**
     * Magazine Name.
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
     * Magazine's manga count.
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
     * Magazine Name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Magazine Name.
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
     * Magazine's manga count.
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * Magazine's manga count.
     */
    public function setCount(int $count): self
    {
        $this->count = $count;

        return $this;
    }
}

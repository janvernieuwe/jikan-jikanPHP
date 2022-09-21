<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UserClubsdataItem
{
    /**
     * MyAnimeList ID.
     *
     * @var int
     */
    protected $malId;

    /**
     * Club Name.
     *
     * @var string
     */
    protected $name;

    /**
     * Club URL.
     *
     * @var string
     */
    protected $url;

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
     * Club Name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Club Name.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Club URL.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Club URL.
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }
}

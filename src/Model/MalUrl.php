<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class MalUrl
{
    /**
     * MyAnimeList ID.
     *
     * @var int
     */
    protected $malId;

    /**
     * Type of resource.
     *
     * @var string
     */
    protected $type;

    /**
     * Resource Name/Title.
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
     * Type of resource.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type of resource.
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Resource Name/Title.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Resource Name/Title.
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
}

<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class MalUrl2
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
    protected $title;
    /**
     * MyAnimeList URL.
     *
     * @var string
     */
    protected $url;

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
     * Type of resource.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Type of resource.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Resource Name/Title.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Resource Name/Title.
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

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
}

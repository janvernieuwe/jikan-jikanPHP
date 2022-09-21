<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class Club
{
    /**
     * MyAnimeList ID.
     *
     * @var int
     */
    protected $malId;

    /**
     * Club name.
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
     * @var CommonImages
     */
    protected $images;

    /**
     * Number of club members.
     *
     * @var int
     */
    protected $members;

    /**
     * Club Category.
     *
     * @var string
     */
    protected $category;

    /**
     * Date Created ISO8601.
     *
     * @var string
     */
    protected $created;

    /**
     * Club access.
     *
     * @var string
     */
    protected $access;

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
     * Club name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Club name.
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
     * Number of club members.
     */
    public function getMembers(): int
    {
        return $this->members;
    }

    /**
     * Number of club members.
     */
    public function setMembers(int $members): self
    {
        $this->members = $members;

        return $this;
    }

    /**
     * Club Category.
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * Club Category.
     */
    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Date Created ISO8601.
     */
    public function getCreated(): string
    {
        return $this->created;
    }

    /**
     * Date Created ISO8601.
     */
    public function setCreated(string $created): self
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Club access.
     */
    public function getAccess(): string
    {
        return $this->access;
    }

    /**
     * Club access.
     */
    public function setAccess(string $access): self
    {
        $this->access = $access;

        return $this;
    }
}

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
     * Club name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Club name.
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

    /**
     * Club URL.
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Club URL.
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
     * Number of club members.
     *
     * @return int
     */
    public function getMembers(): int
    {
        return $this->members;
    }

    /**
     * Number of club members.
     *
     * @param int $members
     *
     * @return self
     */
    public function setMembers(int $members): self
    {
        $this->members = $members;

        return $this;
    }

    /**
     * Club Category.
     *
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * Club Category.
     *
     * @param string $category
     *
     * @return self
     */
    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Date Created ISO8601.
     *
     * @return string
     */
    public function getCreated(): string
    {
        return $this->created;
    }

    /**
     * Date Created ISO8601.
     *
     * @param string $created
     *
     * @return self
     */
    public function setCreated(string $created): self
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Club access.
     *
     * @return string
     */
    public function getAccess(): string
    {
        return $this->access;
    }

    /**
     * Club access.
     *
     * @param string $access
     *
     * @return self
     */
    public function setAccess(string $access): self
    {
        $this->access = $access;

        return $this;
    }
}

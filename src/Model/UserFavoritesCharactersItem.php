<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UserFavoritesCharactersItem
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
     * @var CharacterImages
     */
    protected $images;

    /**
     * Entry name.
     *
     * @var string
     */
    protected $name;

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

    public function getImages(): CharacterImages
    {
        return $this->images;
    }

    public function setImages(CharacterImages $characterImages): self
    {
        $this->images = $characterImages;

        return $this;
    }

    /**
     * Entry name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Entry name.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

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
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Resource Name/Title.
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
}

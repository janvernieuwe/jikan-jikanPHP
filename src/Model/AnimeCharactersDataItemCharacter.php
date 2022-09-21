<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeCharactersDataItemCharacter
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
     * Character Name.
     *
     * @var string
     */
    protected $name;

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
     * Character Name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Character Name.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}

<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class CharacterMeta
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
     * @return CharacterImages
     */
    public function getImages(): CharacterImages
    {
        return $this->images;
    }

    /**
     * @param CharacterImages $images
     *
     * @return self
     */
    public function setImages(CharacterImages $images): self
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Entry name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Entry name.
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
}

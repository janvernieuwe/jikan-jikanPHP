<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class Character
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
     * Name.
     *
     * @var string
     */
    protected $name;
    /**
     * Name.
     *
     * @var string|null
     */
    protected $nameKanji;
    /**
     * Other Names.
     *
     * @var string[]
     */
    protected $nicknames;
    /**
     * Number of users who have favorited this entry.
     *
     * @var int
     */
    protected $favorites;
    /**
     * Biography.
     *
     * @var string|null
     */
    protected $about;

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
     * Name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name.
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
     * Name.
     *
     * @return string|null
     */
    public function getNameKanji(): ?string
    {
        return $this->nameKanji;
    }

    /**
     * Name.
     *
     * @param string|null $nameKanji
     *
     * @return self
     */
    public function setNameKanji(?string $nameKanji): self
    {
        $this->nameKanji = $nameKanji;

        return $this;
    }

    /**
     * Other Names.
     *
     * @return string[]
     */
    public function getNicknames(): array
    {
        return $this->nicknames;
    }

    /**
     * Other Names.
     *
     * @param string[] $nicknames
     *
     * @return self
     */
    public function setNicknames(array $nicknames): self
    {
        $this->nicknames = $nicknames;

        return $this;
    }

    /**
     * Number of users who have favorited this entry.
     *
     * @return int
     */
    public function getFavorites(): int
    {
        return $this->favorites;
    }

    /**
     * Number of users who have favorited this entry.
     *
     * @param int $favorites
     *
     * @return self
     */
    public function setFavorites(int $favorites): self
    {
        $this->favorites = $favorites;

        return $this;
    }

    /**
     * Biography.
     *
     * @return string|null
     */
    public function getAbout(): ?string
    {
        return $this->about;
    }

    /**
     * Biography.
     *
     * @param string|null $about
     *
     * @return self
     */
    public function setAbout(?string $about): self
    {
        $this->about = $about;

        return $this;
    }
}

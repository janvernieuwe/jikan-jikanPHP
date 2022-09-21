<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class CharacterFull
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
    protected $nicknames = [];

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
     * @var CharacterFullAnimeItem[]
     */
    protected $anime = [];

    /**
     * @var CharacterFullMangaItem[]
     */
    protected $manga = [];

    /**
     * @var CharacterFullVoicesItem[]
     */
    protected $voices = [];

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
     * Name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Name.
     */
    public function getNameKanji(): ?string
    {
        return $this->nameKanji;
    }

    /**
     * Name.
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
     */
    public function setNicknames(array $nicknames): self
    {
        $this->nicknames = $nicknames;

        return $this;
    }

    /**
     * Number of users who have favorited this entry.
     */
    public function getFavorites(): int
    {
        return $this->favorites;
    }

    /**
     * Number of users who have favorited this entry.
     */
    public function setFavorites(int $favorites): self
    {
        $this->favorites = $favorites;

        return $this;
    }

    /**
     * Biography.
     */
    public function getAbout(): ?string
    {
        return $this->about;
    }

    /**
     * Biography.
     */
    public function setAbout(?string $about): self
    {
        $this->about = $about;

        return $this;
    }

    /**
     * @return CharacterFullAnimeItem[]
     */
    public function getAnime(): array
    {
        return $this->anime;
    }

    /**
     * @param CharacterFullAnimeItem[] $anime
     */
    public function setAnime(array $anime): self
    {
        $this->anime = $anime;

        return $this;
    }

    /**
     * @return CharacterFullMangaItem[]
     */
    public function getManga(): array
    {
        return $this->manga;
    }

    /**
     * @param CharacterFullMangaItem[] $manga
     */
    public function setManga(array $manga): self
    {
        $this->manga = $manga;

        return $this;
    }

    /**
     * @return CharacterFullVoicesItem[]
     */
    public function getVoices(): array
    {
        return $this->voices;
    }

    /**
     * @param CharacterFullVoicesItem[] $voices
     */
    public function setVoices(array $voices): self
    {
        $this->voices = $voices;

        return $this;
    }
}

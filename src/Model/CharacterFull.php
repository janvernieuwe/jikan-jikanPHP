<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class CharacterFull extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

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
     * @var list<string>
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
     * @var list<CharacterFullAnimeItem>
     */
    protected $anime;

    /**
     * @var list<CharacterFullMangaItem>
     */
    protected $manga;

    /**
     * @var list<CharacterFullVoicesItem>
     */
    protected $voices;

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
        $this->initialized['malId'] = true;
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
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }

    public function getImages(): CharacterImages
    {
        return $this->images;
    }

    public function setImages(CharacterImages $images): self
    {
        $this->initialized['images'] = true;
        $this->images = $images;

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
        $this->initialized['name'] = true;
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
        $this->initialized['nameKanji'] = true;
        $this->nameKanji = $nameKanji;

        return $this;
    }

    /**
     * Other Names.
     *
     * @return list<string>
     */
    public function getNicknames(): array
    {
        return $this->nicknames;
    }

    /**
     * Other Names.
     *
     * @param list<string> $nicknames
     */
    public function setNicknames(array $nicknames): self
    {
        $this->initialized['nicknames'] = true;
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
        $this->initialized['favorites'] = true;
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
        $this->initialized['about'] = true;
        $this->about = $about;

        return $this;
    }

    /**
     * @return list<CharacterFullAnimeItem>
     */
    public function getAnime(): array
    {
        return $this->anime;
    }

    /**
     * @param list<CharacterFullAnimeItem> $anime
     */
    public function setAnime(array $anime): self
    {
        $this->initialized['anime'] = true;
        $this->anime = $anime;

        return $this;
    }

    /**
     * @return list<CharacterFullMangaItem>
     */
    public function getManga(): array
    {
        return $this->manga;
    }

    /**
     * @param list<CharacterFullMangaItem> $manga
     */
    public function setManga(array $manga): self
    {
        $this->initialized['manga'] = true;
        $this->manga = $manga;

        return $this;
    }

    /**
     * @return list<CharacterFullVoicesItem>
     */
    public function getVoices(): array
    {
        return $this->voices;
    }

    /**
     * @param list<CharacterFullVoicesItem> $voices
     */
    public function setVoices(array $voices): self
    {
        $this->initialized['voices'] = true;
        $this->voices = $voices;

        return $this;
    }
}

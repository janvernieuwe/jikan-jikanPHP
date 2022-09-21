<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UsersTempDataItemFavorites
{
    /**
     * Favorite Anime.
     *
     * @var EntryMeta[]
     */
    protected $anime = [];

    /**
     * Favorite Manga.
     *
     * @var EntryMeta[]
     */
    protected $manga = [];

    /**
     * Favorite Characters.
     *
     * @var EntryMeta[]
     */
    protected $characters = [];

    /**
     * Favorite People.
     *
     * @var EntryMeta[]
     */
    protected $people = [];

    /**
     * Favorite Anime.
     *
     * @return EntryMeta[]
     */
    public function getAnime(): array
    {
        return $this->anime;
    }

    /**
     * Favorite Anime.
     *
     * @param EntryMeta[] $anime
     */
    public function setAnime(array $anime): self
    {
        $this->anime = $anime;

        return $this;
    }

    /**
     * Favorite Manga.
     *
     * @return EntryMeta[]
     */
    public function getManga(): array
    {
        return $this->manga;
    }

    /**
     * Favorite Manga.
     *
     * @param EntryMeta[] $manga
     */
    public function setManga(array $manga): self
    {
        $this->manga = $manga;

        return $this;
    }

    /**
     * Favorite Characters.
     *
     * @return EntryMeta[]
     */
    public function getCharacters(): array
    {
        return $this->characters;
    }

    /**
     * Favorite Characters.
     *
     * @param EntryMeta[] $characters
     */
    public function setCharacters(array $characters): self
    {
        $this->characters = $characters;

        return $this;
    }

    /**
     * Favorite People.
     *
     * @return EntryMeta[]
     */
    public function getPeople(): array
    {
        return $this->people;
    }

    /**
     * Favorite People.
     *
     * @param EntryMeta[] $people
     */
    public function setPeople(array $people): self
    {
        $this->people = $people;

        return $this;
    }
}

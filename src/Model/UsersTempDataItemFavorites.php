<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UsersTempDataItemFavorites extends \ArrayObject
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
     * Favorite Anime.
     *
     * @var list<EntryMeta>
     */
    protected $anime;

    /**
     * Favorite Manga.
     *
     * @var list<EntryMeta>
     */
    protected $manga;

    /**
     * Favorite Characters.
     *
     * @var list<EntryMeta>
     */
    protected $characters;

    /**
     * Favorite People.
     *
     * @var list<EntryMeta>
     */
    protected $people;

    /**
     * Favorite Anime.
     *
     * @return list<EntryMeta>
     */
    public function getAnime(): array
    {
        return $this->anime;
    }

    /**
     * Favorite Anime.
     *
     * @param list<EntryMeta> $anime
     */
    public function setAnime(array $anime): self
    {
        $this->initialized['anime'] = true;
        $this->anime = $anime;

        return $this;
    }

    /**
     * Favorite Manga.
     *
     * @return list<EntryMeta>
     */
    public function getManga(): array
    {
        return $this->manga;
    }

    /**
     * Favorite Manga.
     *
     * @param list<EntryMeta> $manga
     */
    public function setManga(array $manga): self
    {
        $this->initialized['manga'] = true;
        $this->manga = $manga;

        return $this;
    }

    /**
     * Favorite Characters.
     *
     * @return list<EntryMeta>
     */
    public function getCharacters(): array
    {
        return $this->characters;
    }

    /**
     * Favorite Characters.
     *
     * @param list<EntryMeta> $characters
     */
    public function setCharacters(array $characters): self
    {
        $this->initialized['characters'] = true;
        $this->characters = $characters;

        return $this;
    }

    /**
     * Favorite People.
     *
     * @return list<EntryMeta>
     */
    public function getPeople(): array
    {
        return $this->people;
    }

    /**
     * Favorite People.
     *
     * @param list<EntryMeta> $people
     */
    public function setPeople(array $people): self
    {
        $this->initialized['people'] = true;
        $this->people = $people;

        return $this;
    }
}

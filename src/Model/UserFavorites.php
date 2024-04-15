<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UserFavorites extends \ArrayObject
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
     * @var list<array<string, mixed>>
     */
    protected $anime;

    /**
     * Favorite Manga.
     *
     * @var list<array<string, mixed>>
     */
    protected $manga;

    /**
     * Favorite Characters.
     *
     * @var list<array<string, mixed>>
     */
    protected $characters;

    /**
     * Favorite People.
     *
     * @var list<CharacterMeta>
     */
    protected $people;

    /**
     * Favorite Anime.
     *
     * @return list<array<string, mixed>>
     */
    public function getAnime(): array
    {
        return $this->anime;
    }

    /**
     * Favorite Anime.
     *
     * @param list<array<string, mixed>> $anime
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
     * @return list<array<string, mixed>>
     */
    public function getManga(): array
    {
        return $this->manga;
    }

    /**
     * Favorite Manga.
     *
     * @param list<array<string, mixed>> $manga
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
     * @return list<array<string, mixed>>
     */
    public function getCharacters(): array
    {
        return $this->characters;
    }

    /**
     * Favorite Characters.
     *
     * @param list<array<string, mixed>> $characters
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
     * @return list<CharacterMeta>
     */
    public function getPeople(): array
    {
        return $this->people;
    }

    /**
     * Favorite People.
     *
     * @param list<CharacterMeta> $people
     */
    public function setPeople(array $people): self
    {
        $this->initialized['people'] = true;
        $this->people = $people;

        return $this;
    }
}

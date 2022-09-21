<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UserFavorites
{
    /**
     * Favorite Anime.
     *
     * @var UserFavoritesAnimeItem[]
     */
    protected $anime = [];

    /**
     * Favorite Manga.
     *
     * @var UserFavoritesMangaItem[]
     */
    protected $manga = [];

    /**
     * Favorite Characters.
     *
     * @var UserFavoritesCharactersItem[]
     */
    protected $characters = [];

    /**
     * Favorite People.
     *
     * @var CharacterMeta[]
     */
    protected $people = [];

    /**
     * Favorite Anime.
     *
     * @return UserFavoritesAnimeItem[]
     */
    public function getAnime(): array
    {
        return $this->anime;
    }

    /**
     * Favorite Anime.
     *
     * @param UserFavoritesAnimeItem[] $anime
     */
    public function setAnime(array $anime): self
    {
        $this->anime = $anime;

        return $this;
    }

    /**
     * Favorite Manga.
     *
     * @return UserFavoritesMangaItem[]
     */
    public function getManga(): array
    {
        return $this->manga;
    }

    /**
     * Favorite Manga.
     *
     * @param UserFavoritesMangaItem[] $manga
     */
    public function setManga(array $manga): self
    {
        $this->manga = $manga;

        return $this;
    }

    /**
     * Favorite Characters.
     *
     * @return UserFavoritesCharactersItem[]
     */
    public function getCharacters(): array
    {
        return $this->characters;
    }

    /**
     * Favorite Characters.
     *
     * @param UserFavoritesCharactersItem[] $characters
     */
    public function setCharacters(array $characters): self
    {
        $this->characters = $characters;

        return $this;
    }

    /**
     * Favorite People.
     *
     * @return CharacterMeta[]
     */
    public function getPeople(): array
    {
        return $this->people;
    }

    /**
     * Favorite People.
     *
     * @param CharacterMeta[] $people
     */
    public function setPeople(array $people): self
    {
        $this->people = $people;

        return $this;
    }
}

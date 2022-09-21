<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UserUpdatesData
{
    /**
     * Last updated Anime.
     *
     * @var UserUpdatesDataAnimeItem[]
     */
    protected $anime = [];

    /**
     * Last updated Manga.
     *
     * @var UserUpdatesDataMangaItem[]
     */
    protected $manga = [];

    /**
     * Last updated Anime.
     *
     * @return UserUpdatesDataAnimeItem[]
     */
    public function getAnime(): array
    {
        return $this->anime;
    }

    /**
     * Last updated Anime.
     *
     * @param UserUpdatesDataAnimeItem[] $anime
     */
    public function setAnime(array $anime): self
    {
        $this->anime = $anime;

        return $this;
    }

    /**
     * Last updated Manga.
     *
     * @return UserUpdatesDataMangaItem[]
     */
    public function getManga(): array
    {
        return $this->manga;
    }

    /**
     * Last updated Manga.
     *
     * @param UserUpdatesDataMangaItem[] $manga
     */
    public function setManga(array $manga): self
    {
        $this->manga = $manga;

        return $this;
    }
}

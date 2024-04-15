<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class UserUpdatesData extends ArrayObject
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
     * Last updated Anime.
     *
     * @var list<array<string, mixed>>
     */
    protected $anime;

    /**
     * Last updated Manga.
     *
     * @var list<array<string, mixed>>
     */
    protected $manga;

    /**
     * Last updated Anime.
     *
     * @return list<array<string, mixed>>
     */
    public function getAnime(): array
    {
        return $this->anime;
    }

    /**
     * Last updated Anime.
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
     * Last updated Manga.
     *
     * @return list<array<string, mixed>>
     */
    public function getManga(): array
    {
        return $this->manga;
    }

    /**
     * Last updated Manga.
     *
     * @param list<array<string, mixed>> $manga
     */
    public function setManga(array $manga): self
    {
        $this->initialized['manga'] = true;
        $this->manga = $manga;

        return $this;
    }
}

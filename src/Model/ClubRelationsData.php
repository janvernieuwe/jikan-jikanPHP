<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class ClubRelationsData extends ArrayObject
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
     * @var list<MalUrl>
     */
    protected $anime;

    /**
     * @var list<MalUrl>
     */
    protected $manga;

    /**
     * @var list<MalUrl>
     */
    protected $characters;

    /**
     * @return list<MalUrl>
     */
    public function getAnime(): array
    {
        return $this->anime;
    }

    /**
     * @param list<MalUrl> $anime
     */
    public function setAnime(array $anime): self
    {
        $this->initialized['anime'] = true;
        $this->anime = $anime;

        return $this;
    }

    /**
     * @return list<MalUrl>
     */
    public function getManga(): array
    {
        return $this->manga;
    }

    /**
     * @param list<MalUrl> $manga
     */
    public function setManga(array $manga): self
    {
        $this->initialized['manga'] = true;
        $this->manga = $manga;

        return $this;
    }

    /**
     * @return list<MalUrl>
     */
    public function getCharacters(): array
    {
        return $this->characters;
    }

    /**
     * @param list<MalUrl> $characters
     */
    public function setCharacters(array $characters): self
    {
        $this->initialized['characters'] = true;
        $this->characters = $characters;

        return $this;
    }
}

<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class ClubRelationsData
{
    /**
     * @var MalUrl[]
     */
    protected $anime = [];

    /**
     * @var MalUrl[]
     */
    protected $manga = [];

    /**
     * @var MalUrl[]
     */
    protected $characters = [];

    /**
     * @return MalUrl[]
     */
    public function getAnime(): array
    {
        return $this->anime;
    }

    /**
     * @param MalUrl[] $anime
     */
    public function setAnime(array $anime): self
    {
        $this->anime = $anime;

        return $this;
    }

    /**
     * @return MalUrl[]
     */
    public function getManga(): array
    {
        return $this->manga;
    }

    /**
     * @param MalUrl[] $manga
     */
    public function setManga(array $manga): self
    {
        $this->manga = $manga;

        return $this;
    }

    /**
     * @return MalUrl[]
     */
    public function getCharacters(): array
    {
        return $this->characters;
    }

    /**
     * @param MalUrl[] $characters
     */
    public function setCharacters(array $characters): self
    {
        $this->characters = $characters;

        return $this;
    }
}

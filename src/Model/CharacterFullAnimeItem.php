<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class CharacterFullAnimeItem
{
    /**
     * Character's Role.
     *
     * @var string
     */
    protected $role;

    /**
     * @var AnimeMeta
     */
    protected $anime;

    /**
     * Character's Role.
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * Character's Role.
     */
    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getAnime(): AnimeMeta
    {
        return $this->anime;
    }

    public function setAnime(AnimeMeta $animeMeta): self
    {
        $this->anime = $animeMeta;

        return $this;
    }
}

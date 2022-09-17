<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class CharacterAnimeDataItem
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
     *
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * Character's Role.
     *
     * @param string $role
     *
     * @return self
     */
    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    /**
     * @return AnimeMeta
     */
    public function getAnime(): AnimeMeta
    {
        return $this->anime;
    }

    /**
     * @param AnimeMeta $anime
     *
     * @return self
     */
    public function setAnime(AnimeMeta $anime): self
    {
        $this->anime = $anime;

        return $this;
    }
}

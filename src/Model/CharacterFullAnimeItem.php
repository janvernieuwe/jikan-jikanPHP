<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class CharacterFullAnimeItem extends \ArrayObject
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
        $this->initialized['role'] = true;
        $this->role = $role;

        return $this;
    }

    public function getAnime(): AnimeMeta
    {
        return $this->anime;
    }

    public function setAnime(AnimeMeta $anime): self
    {
        $this->initialized['anime'] = true;
        $this->anime = $anime;

        return $this;
    }
}

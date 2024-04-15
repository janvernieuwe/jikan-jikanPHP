<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class PersonFullVoicesItem extends \ArrayObject
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
     * Person's Character's role in the anime.
     *
     * @var string
     */
    protected $role;

    /**
     * @var AnimeMeta
     */
    protected $anime;

    /**
     * @var CharacterMeta
     */
    protected $character;

    /**
     * Person's Character's role in the anime.
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * Person's Character's role in the anime.
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

    public function getCharacter(): CharacterMeta
    {
        return $this->character;
    }

    public function setCharacter(CharacterMeta $character): self
    {
        $this->initialized['character'] = true;
        $this->character = $character;

        return $this;
    }
}

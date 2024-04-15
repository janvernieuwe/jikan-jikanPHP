<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class MangaCharactersDataItem extends \ArrayObject
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
     * @var CharacterMeta
     */
    protected $character;

    /**
     * Character's Role.
     *
     * @var string
     */
    protected $role;

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
}

<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class MangaCharactersDataItem
{
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

    public function setCharacter(CharacterMeta $characterMeta): self
    {
        $this->character = $characterMeta;

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
        $this->role = $role;

        return $this;
    }
}

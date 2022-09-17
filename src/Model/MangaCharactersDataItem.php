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

    /**
     * @return CharacterMeta
     */
    public function getCharacter(): CharacterMeta
    {
        return $this->character;
    }

    /**
     * @param CharacterMeta $character
     *
     * @return self
     */
    public function setCharacter(CharacterMeta $character): self
    {
        $this->character = $character;

        return $this;
    }

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
}

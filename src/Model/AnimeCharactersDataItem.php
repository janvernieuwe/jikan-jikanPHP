<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeCharactersDataItem
{
    /**
     * Character details.
     *
     * @var AnimeCharactersDataItemCharacter
     */
    protected $character;
    /**
     * Character's Role.
     *
     * @var string
     */
    protected $role;
    /**
     * @var AnimeCharactersDataItemVoiceActorsItem[]
     */
    protected $voiceActors;

    /**
     * Character details.
     *
     * @return AnimeCharactersDataItemCharacter
     */
    public function getCharacter(): AnimeCharactersDataItemCharacter
    {
        return $this->character;
    }

    /**
     * Character details.
     *
     * @param AnimeCharactersDataItemCharacter $character
     *
     * @return self
     */
    public function setCharacter(AnimeCharactersDataItemCharacter $character): self
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

    /**
     * @return AnimeCharactersDataItemVoiceActorsItem[]
     */
    public function getVoiceActors(): array
    {
        return $this->voiceActors;
    }

    /**
     * @param AnimeCharactersDataItemVoiceActorsItem[] $voiceActors
     *
     * @return self
     */
    public function setVoiceActors(array $voiceActors): self
    {
        $this->voiceActors = $voiceActors;

        return $this;
    }
}

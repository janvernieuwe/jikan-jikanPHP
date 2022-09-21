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
    protected $voiceActors = [];

    /**
     * Character details.
     */
    public function getCharacter(): AnimeCharactersDataItemCharacter
    {
        return $this->character;
    }

    /**
     * Character details.
     */
    public function setCharacter(AnimeCharactersDataItemCharacter $animeCharactersDataItemCharacter): self
    {
        $this->character = $animeCharactersDataItemCharacter;

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

    /**
     * @return AnimeCharactersDataItemVoiceActorsItem[]
     */
    public function getVoiceActors(): array
    {
        return $this->voiceActors;
    }

    /**
     * @param AnimeCharactersDataItemVoiceActorsItem[] $voiceActors
     */
    public function setVoiceActors(array $voiceActors): self
    {
        $this->voiceActors = $voiceActors;

        return $this;
    }
}

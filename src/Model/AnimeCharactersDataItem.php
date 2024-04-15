<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeCharactersDataItem extends \ArrayObject
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
     * @var list<AnimeCharactersDataItemVoiceActorsItem>
     */
    protected $voiceActors;

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
    public function setCharacter(AnimeCharactersDataItemCharacter $character): self
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

    /**
     * @return list<AnimeCharactersDataItemVoiceActorsItem>
     */
    public function getVoiceActors(): array
    {
        return $this->voiceActors;
    }

    /**
     * @param list<AnimeCharactersDataItemVoiceActorsItem> $voiceActors
     */
    public function setVoiceActors(array $voiceActors): self
    {
        $this->initialized['voiceActors'] = true;
        $this->voiceActors = $voiceActors;

        return $this;
    }
}

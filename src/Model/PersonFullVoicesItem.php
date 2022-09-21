<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class PersonFullVoicesItem
{
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

    public function getCharacter(): CharacterMeta
    {
        return $this->character;
    }

    public function setCharacter(CharacterMeta $characterMeta): self
    {
        $this->character = $characterMeta;

        return $this;
    }
}

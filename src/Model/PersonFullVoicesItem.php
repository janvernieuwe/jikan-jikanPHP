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
     *
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * Person's Character's role in the anime.
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
}

<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class CharacterMangaDataItem extends \ArrayObject
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
     * @var MangaMeta
     */
    protected $manga;

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

    public function getManga(): MangaMeta
    {
        return $this->manga;
    }

    public function setManga(MangaMeta $manga): self
    {
        $this->initialized['manga'] = true;
        $this->manga = $manga;

        return $this;
    }
}

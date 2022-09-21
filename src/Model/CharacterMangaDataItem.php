<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class CharacterMangaDataItem
{
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
        $this->role = $role;

        return $this;
    }

    public function getManga(): MangaMeta
    {
        return $this->manga;
    }

    public function setManga(MangaMeta $mangaMeta): self
    {
        $this->manga = $mangaMeta;

        return $this;
    }
}

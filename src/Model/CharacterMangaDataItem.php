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
     * @return MangaMeta
     */
    public function getManga(): MangaMeta
    {
        return $this->manga;
    }

    /**
     * @param MangaMeta $manga
     *
     * @return self
     */
    public function setManga(MangaMeta $manga): self
    {
        $this->manga = $manga;

        return $this;
    }
}

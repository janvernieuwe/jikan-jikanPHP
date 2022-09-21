<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class PersonFullMangaItem
{
    /**
     * Person's position.
     *
     * @var string
     */
    protected $position;

    /**
     * @var MangaMeta
     */
    protected $manga;

    /**
     * Person's position.
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * Person's position.
     */
    public function setPosition(string $position): self
    {
        $this->position = $position;

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

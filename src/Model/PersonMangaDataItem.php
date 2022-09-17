<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class PersonMangaDataItem
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
     *
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * Person's position.
     *
     * @param string $position
     *
     * @return self
     */
    public function setPosition(string $position): self
    {
        $this->position = $position;

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

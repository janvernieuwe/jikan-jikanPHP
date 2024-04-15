<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class PersonMangaDataItem extends \ArrayObject
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
        $this->initialized['position'] = true;
        $this->position = $position;

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

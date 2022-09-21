<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class PersonAnimeDataItem
{
    /**
     * Person's position.
     *
     * @var string
     */
    protected $position;

    /**
     * @var AnimeMeta
     */
    protected $anime;

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

    public function getAnime(): AnimeMeta
    {
        return $this->anime;
    }

    public function setAnime(AnimeMeta $animeMeta): self
    {
        $this->anime = $animeMeta;

        return $this;
    }
}

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
}

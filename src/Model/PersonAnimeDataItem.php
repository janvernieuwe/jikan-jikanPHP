<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class PersonAnimeDataItem extends \ArrayObject
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
        $this->initialized['position'] = true;
        $this->position = $position;

        return $this;
    }

    public function getAnime(): AnimeMeta
    {
        return $this->anime;
    }

    public function setAnime(AnimeMeta $anime): self
    {
        $this->initialized['anime'] = true;
        $this->anime = $anime;

        return $this;
    }
}

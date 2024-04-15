<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class WatchEpisodesdataItem extends \ArrayObject
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
     * @var AnimeMeta
     */
    protected $entry;

    /**
     * Recent Episodes (max 2 listed).
     *
     * @var list<WatchEpisodesdataItemEpisodesItem>
     */
    protected $episodes;

    /**
     * Region Locked Episode.
     *
     * @var bool
     */
    protected $regionLocked;

    public function getEntry(): AnimeMeta
    {
        return $this->entry;
    }

    public function setEntry(AnimeMeta $entry): self
    {
        $this->initialized['entry'] = true;
        $this->entry = $entry;

        return $this;
    }

    /**
     * Recent Episodes (max 2 listed).
     *
     * @return list<WatchEpisodesdataItemEpisodesItem>
     */
    public function getEpisodes(): array
    {
        return $this->episodes;
    }

    /**
     * Recent Episodes (max 2 listed).
     *
     * @param list<WatchEpisodesdataItemEpisodesItem> $episodes
     */
    public function setEpisodes(array $episodes): self
    {
        $this->initialized['episodes'] = true;
        $this->episodes = $episodes;

        return $this;
    }

    /**
     * Region Locked Episode.
     */
    public function getRegionLocked(): bool
    {
        return $this->regionLocked;
    }

    /**
     * Region Locked Episode.
     */
    public function setRegionLocked(bool $regionLocked): self
    {
        $this->initialized['regionLocked'] = true;
        $this->regionLocked = $regionLocked;

        return $this;
    }
}

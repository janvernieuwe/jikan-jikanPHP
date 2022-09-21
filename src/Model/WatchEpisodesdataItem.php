<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class WatchEpisodesdataItem
{
    /**
     * @var AnimeMeta
     */
    protected $entry;

    /**
     * Recent Episodes (max 2 listed).
     *
     * @var WatchEpisodesdataItemEpisodesItem[]
     */
    protected $episodes = [];

    /**
     * Region Locked Episode.
     *
     * @var bool
     */
    protected $regionLocked = false;

    public function getEntry(): AnimeMeta
    {
        return $this->entry;
    }

    public function setEntry(AnimeMeta $animeMeta): self
    {
        $this->entry = $animeMeta;

        return $this;
    }

    /**
     * Recent Episodes (max 2 listed).
     *
     * @return WatchEpisodesdataItemEpisodesItem[]
     */
    public function getEpisodes(): array
    {
        return $this->episodes;
    }

    /**
     * Recent Episodes (max 2 listed).
     *
     * @param WatchEpisodesdataItemEpisodesItem[] $episodes
     */
    public function setEpisodes(array $episodes): self
    {
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
        $this->regionLocked = $regionLocked;

        return $this;
    }
}

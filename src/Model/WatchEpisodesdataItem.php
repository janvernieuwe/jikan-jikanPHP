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
    protected $episodes;
    /**
     * Region Locked Episode.
     *
     * @var bool
     */
    protected $regionLocked;

    /**
     * @return AnimeMeta
     */
    public function getEntry(): AnimeMeta
    {
        return $this->entry;
    }

    /**
     * @param AnimeMeta $entry
     *
     * @return self
     */
    public function setEntry(AnimeMeta $entry): self
    {
        $this->entry = $entry;

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
     *
     * @return self
     */
    public function setEpisodes(array $episodes): self
    {
        $this->episodes = $episodes;

        return $this;
    }

    /**
     * Region Locked Episode.
     *
     * @return bool
     */
    public function getRegionLocked(): bool
    {
        return $this->regionLocked;
    }

    /**
     * Region Locked Episode.
     *
     * @param bool $regionLocked
     *
     * @return self
     */
    public function setRegionLocked(bool $regionLocked): self
    {
        $this->regionLocked = $regionLocked;

        return $this;
    }
}

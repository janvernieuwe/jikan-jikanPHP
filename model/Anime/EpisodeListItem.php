<?php

namespace Jikan\Model\Anime;

use Jikan\Model\Common\DateRange;

/**
 * Class EpisodeParser
 *
 * @package Jikan\Model
 */
class EpisodeListItem
{
    /**
     * @var int
     */
    public $episodeId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string|null
     */
    public $titleJapanese;

    /**
     * @var string|null
     */
    public $titleRomanji;

    /**
     * @var DateRange|null
     */
    public $aired;

    /**
     * @var bool
     */
    public $filler;

    /**
     * @var bool
     */
    public $recap;

    /**
     * @var string
     */
    public $videoUrl;

    /**
     * @var string
     */
    public $forumUrl;

    /**
     * @return int
     */
    public function getEpisodeId(): int
    {
        return $this->episodeId;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string|null
     */
    public function getTitleJapanese(): ?string
    {
        return $this->titleJapanese;
    }

    /**
     * @return string|null
     */
    public function getTitleRomanji(): ?string
    {
        return $this->titleRomanji;
    }

    /**
     * @return DateRange|null
     */
    public function getAired(): ?DateRange
    {
        return $this->aired;
    }

    /**
     * @return bool
     */
    public function isFiller(): bool
    {
        return $this->filler;
    }

    /**
     * @return bool
     */
    public function isRecap(): bool
    {
        return $this->recap;
    }

    /**
     * @return string
     */
    public function getVideoUrl(): string
    {
        return $this->videoUrl;
    }

    /**
     * @return string
     */
    public function getForumUrl(): string
    {
        return $this->forumUrl;
    }
}

<?php

namespace Jikan\Model\Anime;

/**
 * Class StreamEpisodeListItemParser
 *
 * @package Jikan\Model
 */
class StreamEpisodeListItem
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $episode;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getEpisode(): string
    {
        return $this->episode;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }
}

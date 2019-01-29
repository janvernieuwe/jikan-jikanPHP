<?php

namespace Jikan\Model\Anime;

/**
 * Class PromoListItem
 *
 * @package Jikan\Model
 */
class PromoListItem
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $videoUrl;

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
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    /**
     * @return string
     */
    public function getVideoUrl(): string
    {
        return $this->videoUrl;
    }
}

<?php

namespace Jikan\Model\Genre;

use Jikan\Model\Common\AnimeCard;
use Jikan\Model\Common\MalUrl;

/**
 * Class AnimeGenre
 *
 * @package Jikan\Model
 */
class AnimeGenre
{


    /**
     * @var \Jikan\Model\Common\MalUrl
     */
    public $malUrl;

    /**
     * @var int
     */
    public $itemCount;

    /**
     * @var array|AnimeCard[]
     */
    public $anime = [];

    /**
     * @return \Jikan\Model\Common\MalUrl
     */
    public function getMalUrl(): MalUrl
    {
        return $this->malUrl;
    }

    /**
     * @return int
     */
    public function getItemCount(): int
    {
        return $this->itemCount;
    }

    /**
     * @return array|AnimeCard[]
     */
    public function getAnime(): array
    {
        return $this->anime;
    }
}

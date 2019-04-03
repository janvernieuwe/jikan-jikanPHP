<?php

namespace JikanPHP\Model\Genre;

use JikanPHP\Model\Common\AnimeCard;
use JikanPHP\Model\Common\MalUrl;

/**
 * Class AnimeGenre
 *
 * @package JikanPHP\Model
 */
class AnimeGenre
{


    /**
     * @var \JikanPHP\Model\Common\MalUrl
     */
    public $malUrl;

    /**
     * @var int
     */
    public $itemCount;

    /**
     * @var AnimeCard[]
     */
    public $anime = [];

    /**
     * @return \JikanPHP\Model\Common\MalUrl
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
     * @return AnimeCard[]
     */
    public function getAnime(): array
    {
        return $this->anime;
    }
}

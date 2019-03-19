<?php

namespace JikanPHP\Model\Genre;

use JikanPHP\Model\Common\MalUrl;

/**
 * Class MangaGenre
 *
 * @package JikanPHP\Model
 */
class MangaGenre
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
     * @var array|MangaGenre[]
     */
    public $manga = [];

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
     * @return array|MangaGenre[]
     */
    public function getManga(): array
    {
        return $this->manga;
    }
}

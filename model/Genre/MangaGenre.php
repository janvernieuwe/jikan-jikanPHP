<?php

namespace Jikan\Model\Genre;

use Jikan\Model\Common\MalUrl;

/**
 * Class MangaGenre
 *
 * @package Jikan\Model
 */
class MangaGenre
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
     * @var array|MangaGenre[]
     */
    public $manga = [];

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
     * @return array|MangaGenre[]
     */
    public function getManga(): array
    {
        return $this->manga;
    }
}

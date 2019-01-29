<?php

namespace Jikan\Model\Manga;

/**
 * Class MangaMoreInfo
 *
 * @package Jikan\Model\Manga
 */
class MangaMoreInfo
{
    /**
     * @var string
     */
    private $moreInfo;

    /**
     * @return string
     */
    public function getMoreInfo(): ?string
    {
        return $this->moreInfo;
    }
}

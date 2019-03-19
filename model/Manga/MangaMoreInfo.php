<?php

namespace JikanPHP\Model\Manga;

/**
 * Class MangaMoreInfo
 *
 * @package JikanPHP\Model\Manga
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

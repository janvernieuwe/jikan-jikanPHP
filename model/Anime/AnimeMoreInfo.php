<?php

namespace JikanPHP\Model\Anime;

/**
 * Class AnimeMoreInfo
 *
 * @package JikanPHP\Model\Anime
 */
class AnimeMoreInfo
{
    /**
     * @var string
     */
    private $moreInfo;

    /**
     * @return string|null
     */
    public function getMoreInfo(): ?string
    {
        return $this->moreInfo;
    }
}

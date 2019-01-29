<?php

namespace Jikan\Model\Anime;

/**
 * Class AnimeMoreInfo
 *
 * @package Jikan\Model\Anime
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

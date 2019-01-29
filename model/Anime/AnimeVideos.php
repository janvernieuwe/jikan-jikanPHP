<?php

namespace Jikan\Model\Anime;

/**
 * Class AnimeVideos
 *
 * @package Jikan\Model
 */
class AnimeVideos
{
    /**
     * @var PromoListItem[]
     */
    private $promo;

    /**
     * @var StreamEpisodeListItem[]
     */
    private $episodes;

    /**
     * @return PromoListItem[]
     */
    public function getPromos(): array
    {
        return $this->promo;
    }

    /**
     * @return StreamEpisodeListItem[]
     */
    public function getEpisodes(): array
    {
        return $this->episodes;
    }
}

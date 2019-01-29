<?php

namespace Jikan\Model\Seasonal;

use Jikan\Model\Common\AnimeCard;

/**
 * Class SeasonalAnime
 *
 * @package Jikan\Model
 */
class SeasonalAnime extends AnimeCard
{
    /**
     * @var bool
     */
    protected $continuing;

    /**
     * @return bool
     */
    public function isContinuing(): bool
    {
        return $this->continuing;
    }
}

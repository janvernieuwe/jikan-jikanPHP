<?php

namespace JikanPHP\Model\Seasonal;

use JikanPHP\Model\Common\AnimeCard;

/**
 * Class SeasonalAnime
 *
 * @package JikanPHP\Model
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

<?php

namespace JikanPHP\Request\Anime;

use JikanPHP\Helper\Constants;
use JikanPHP\Request\RequestInterface;

/**
 * Class AnimeStatsRequest
 *
 * @package JikanPHP\Request
 */
class AnimeStatsRequest implements RequestInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * AnimeStatsRequest constructor.
     *
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getPath($baseUrl): string
    {
        return sprintf('%s/anime/%d/stats', $baseUrl, $this->id);
    }
}

<?php

namespace JikanPHP\Request\Anime;

use JikanPHP\Helper\Constants;
use JikanPHP\Request\RequestInterface;

/**
 * Class AnimeMoreInfoRequest
 *
 * @package JikanPHP\Request\Anime
 */
class AnimeMoreInfoRequest implements RequestInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * AnimeMoreInfoRequest constructor
     *
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * return string
     */
    public function getPath($baseUrl): string
    {
        return sprintf('%s/anime/%s/moreinfo', $baseUrl, $this->id);
    }
}

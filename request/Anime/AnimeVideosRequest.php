<?php

namespace JikanPHP\Request\Anime;

use JikanPHP\Helper\Constants;
use JikanPHP\Request\RequestInterface;

/**
 * Class AnimeVideos
 *
 * @package JikanPHP\Request
 */
class AnimeVideosRequest implements RequestInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * AnimeVideosRequest constructor.
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
        return sprintf('%s/anime/%d/videos', $baseUrl, $this->id);
    }
}

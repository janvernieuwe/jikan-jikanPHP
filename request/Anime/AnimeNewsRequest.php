<?php

namespace JikanPHP\Request\Anime;

use JikanPHP\Helper\Constants;
use JikanPHP\Request\RequestInterface;

/**
 * Class AnimeRequest
 *
 * @package JikanPHP\Request
 */
class AnimeNewsRequest implements RequestInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * AnimeNewsRequest constructor.
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
        return sprintf('%s/anime/%d/news', $baseUrl, $this->id);
    }
}

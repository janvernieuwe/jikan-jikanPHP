<?php

namespace JikanPHP\Request\Anime;

use JikanPHP\Helper\Constants;
use JikanPHP\Request\RequestInterface;

/**
 * Class AnimeReviewsRequest
 *
 * @package JikanPHP\Request
 */
class AnimeReviewsRequest implements RequestInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $page;

    /**
     * AnimeReviewsRequest constructor.
     *
     * @param int $id
     * @param int $page
     */
    public function __construct(int $id, int $page = 1)
    {
        $this->id = $id;
        $this->page = $page;
    }

    /**
     * @return string
     */
    public function getPath($baseUrl): string
    {
        return sprintf('%s/anime/%d/reviews/%d', $baseUrl, $this->id, $this->page);
    }
}

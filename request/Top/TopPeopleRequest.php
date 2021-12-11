<?php

namespace JikanPHP\Request\Top;

use JikanPHP\Helper\Constants;
use JikanPHP\Request\RequestInterface;

/**
 * Class TopPeopleRequest
 *
 * @package JikanPHP\Request\Top
 */
class TopPeopleRequest implements RequestInterface
{
    /**
     * @var int
     */
    private $page;

    /**
     * TopAnimeRequest constructor.
     *
     * @param int $page
     */
    public function __construct(int $page = 1)
    {
        $this->page = $page;
    }

    /**
     * Get the path to request
     *
     * @return string
     */
    public function getPath($baseUrl): string
    {
        return sprintf('%s/top/people/%d', $baseUrl, $this->page);
    }
}

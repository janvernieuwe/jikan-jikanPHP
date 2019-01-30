<?php

namespace Jikan\Request\Top;

use Jikan\Helper\Constants;
use Jikan\Request\RequestInterface;

/**
 * Class TopCharactersRequest
 *
 * @package Jikan\Request\Top
 */
class TopCharactersRequest implements RequestInterface
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
    public function getPath(): string
    {
        return sprintf(Constants::BASE_URL.'/top/characters/%d', $this->page);
    }
}

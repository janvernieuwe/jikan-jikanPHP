<?php

namespace Jikan\Request\Genre;

use Jikan\Helper\Constants;
use Jikan\Request\RequestInterface;

/**
 * Class AnimeGenreRequest
 *
 * @package Jikan\Request
 */
class AnimeGenreRequest implements RequestInterface
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
     * AnimeGenreRequest constructor.
     *
     * @param int $id
     * @param int $page
     *
     */
    public function __construct(int $id, int $page = 1)
    {
        $this->id = $id;
        $this->page = $page;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return sprintf(Constants::BASE_URL.'/genre/anime/%d/%d', $this->id, $this->page);

    }
}

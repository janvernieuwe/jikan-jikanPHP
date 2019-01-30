<?php

namespace Jikan\Request\Anime;

use Jikan\Request\RequestInterface;

/**
 * Class AnimeReviewsRequest
 *
 * @package Jikan\Request
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
    public function getPath(): string
    {
        return sprintf(Constants::BASE_URL.'/anime/%s/reviews/%d', $this->id, $this->page);
    }
}

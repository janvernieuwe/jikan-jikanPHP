<?php

namespace Jikan\Request\Manga;

use Jikan\Helper\Constants;
use Jikan\Request\RequestInterface;

/**
 * Class MangaReviewsRequest
 *
 * @package Jikan\Request
 */
class MangaReviewsRequest implements RequestInterface
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
     * MangaReviewsRequest constructor.
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
        return sprintf(Constants::BASE_URL.'/manga/%d/reviews/%d', $this->id, $this->page);
    }
}

<?php

namespace Jikan\Request\Anime;

use Jikan\Helper\Constants;
use Jikan\Request\RequestInterface;

/**
 * Class AnimeRecentlyUpdatedByUsersRequest
 *
 * @package Jikan\Request
 */
class AnimeRecentlyUpdatedByUsersRequest implements RequestInterface
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
     * AnimeRecentlyUpdatedByUsersRequest constructor.
     *
     * @param int $id
     */
    public function __construct(int $id, int $page = 1)
    {
        $this->id = $id;
        $this->page = ($page - 1) * 75;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return sprintf(Constants::BASE_URL.'/anime/%d/userupdates/%d', $this->id, $this->page);
    }
}

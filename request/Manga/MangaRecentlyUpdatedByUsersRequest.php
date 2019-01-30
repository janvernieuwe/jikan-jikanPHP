<?php

namespace Jikan\Request\Manga;

use Jikan\Helper\Constants;
use Jikan\Request\RequestInterface;

/**
 * Class MangaRecentlyUpdatedByUsersRequest
 *
 * @package Jikan\Request
 */
class MangaRecentlyUpdatedByUsersRequest implements RequestInterface
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
     * MangaRecentlyUpdatedByUsersRequest constructor.
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
        return sprintf(Constants::BASE_URL.'/manga/%d/userupdates/%d', $this->id, $this->page);
    }
}

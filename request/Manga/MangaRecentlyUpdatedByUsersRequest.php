<?php

namespace JikanPHP\Request\Manga;

use JikanPHP\Helper\Constants;
use JikanPHP\Request\RequestInterface;

/**
 * Class MangaRecentlyUpdatedByUsersRequest
 *
 * @package JikanPHP\Request
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
    public function getPath($baseUrl): string
    {
        return sprintf('%s/manga/%d/userupdates/%d', $baseUrl, $this->id, $this->page);
    }
}

<?php

namespace Jikan\Request\User;

use Jikan\Helper\Constants;
use Jikan\Request\RequestInterface;

/**
 * Class UserMangaListRequest
 *
 * @package Jikan\Request
 */
class UserMangaListRequest implements RequestInterface
{

    /**
     * @var string
     */
    private $username;

    /**
     * @var int
     */
    private $page;

    /**
     * @var int
     */
    private $status;

    /**
     * UserMangaListRequest constructor.
     *
     * @param string $username
     * @param int    $page
     * @param string $status
     */
    public function __construct(string $username, int $page = 1, string $status = Constants::USER_MANGA_LIST_ALL)
    {
        $this->username = $username;
        $this->page = $page;
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return sprintf(Constants::BASE_URL.'/user/%s/mangalist/%s/%d', $this->username, $this->status, $this->page);
    }
}

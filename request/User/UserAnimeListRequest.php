<?php

namespace Jikan\Request\User;

use Jikan\Helper\Constants;
use Jikan\Request\RequestInterface;

/**
 * Class UserAnimeListRequest
 *
 * @package Jikan\Request
 */
class UserAnimeListRequest implements RequestInterface
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
     * UserAnimeListRequest constructor.
     *
     * @param string $username
     * @param int $page
     */
    public function __construct(string $username, int $page = 1, int $status = Constants::USER_ANIME_LIST_ALL)
    {
        $this->username = $username;
        $this->page = ($page - 1) * 300;
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return sprintf(Constants::BASE_URL.'/user/%s/animelist/%d/%d', $this->username, $this->status, $this->page);
    }
}

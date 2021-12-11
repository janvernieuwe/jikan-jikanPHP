<?php

namespace JikanPHP\Request\User;

use JikanPHP\Helper\Constants;
use JikanPHP\Request\RequestInterface;

/**
 * Class UserFriends
 *
 * @package JikanPHP\Request
 */
class UserFriendsRequest implements RequestInterface
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
     * UserProfileRequest constructor.
     *
     * @param string $username
     * @param int    $page starts at 1
     */
    public function __construct(string $username, int $page = 1)
    {
        $this->username = $username;
        $this->page = $page;
    }

    /**
     * @return string
     */
    public function getPath($baseUrl): string
    {
        return sprintf('%s/user/%s/friends/%d', $baseUrl, $this->username, $this->page);
    }
}

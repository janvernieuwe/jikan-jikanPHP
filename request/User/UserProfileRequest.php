<?php

namespace JikanPHP\Request\User;

use JikanPHP\Helper\Constants;
use JikanPHP\Request\RequestInterface;

/**
 * Class UserProfileRequest
 *
 * @package JikanPHP\Request
 */
class UserProfileRequest implements RequestInterface
{

    /**
     * @var string
     */
    private $username;

    /**
     * UserProfileRequest constructor.
     *
     * @param string $username
     */
    public function __construct(string $username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return sprintf(Constants::BASE_URL.'/user/%s', $this->username);
    }
}

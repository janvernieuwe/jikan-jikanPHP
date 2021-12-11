<?php

namespace JikanPHP\Request\Club;

use JikanPHP\Helper\Constants;
use JikanPHP\Request\RequestInterface;

class UserListRequest implements RequestInterface
{

    /**
     * @var int
     */
    private $clubId;

    /**
     * @var int
     */
    private $page;

    /**
     * UserList constructor.
     *
     * @param int $clubId
     * @param int $page
     */
    public function __construct(int $clubId, int $page = 1)
    {
        $this->clubId = $clubId;
        $this->page = ($page - 1) * 36;
    }

    /**
     * Get the path to request
     *
     * @return string
     */
    public function getPath($baseUrl): string
    {
        return sprintf('%s/club/%d/members/%d', $baseUrl, $this->clubId, $this->page);
    }
}

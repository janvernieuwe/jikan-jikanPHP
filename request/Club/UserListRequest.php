<?php

namespace Jikan\Request\Club;

use Jikan\Helper\Constants;
use Jikan\Request\RequestInterface;

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
    public function getPath(): string
    {
        return sprintf(Constants::BASE_URL.'/club/%d/members/%d', $this->clubId, $this->page);
    }
}

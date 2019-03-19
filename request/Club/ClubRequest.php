<?php

namespace JikanPHP\Request\Club;

use JikanPHP\Helper\Constants;
use JikanPHP\Request\RequestInterface;

class ClubRequest implements RequestInterface
{

    /**
     * @var int
     */
    private $clubId;

    /**
     * ClubRequest constructor.
     *
     * @param int $clubId
     * @param int $page
     */
    public function __construct(int $clubId)
    {
        $this->clubId = $clubId;
    }

    /**
     * Get the path to request
     *
     * @return string
     */
    public function getPath(): string
    {
        return sprintf(Constants::BASE_URL.'/club/%d', $this->clubId);
    }
}

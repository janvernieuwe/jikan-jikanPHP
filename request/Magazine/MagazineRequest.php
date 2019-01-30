<?php

namespace Jikan\Request\Magazine;

use Jikan\Helper\Constants;
use Jikan\Request\RequestInterface;

/**
 * Class MagazineRequest
 *
 * @package Jikan\Request
 */
class MagazineRequest implements RequestInterface
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
     * MagazineRequest constructor.
     *
     * @param int $id
     * @param int $page
     *
     */
    public function __construct(int $id, int $page = 1)
    {
        $this->id = $id;
        $this->page = $page;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return sprintf(Constants::BASE_URL.'/magazine/%d/%d', $this->id, $this->page);
    }
}

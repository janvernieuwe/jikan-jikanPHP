<?php

namespace Jikan\Request\Anime;

use Jikan\Helper\Constants;
use Jikan\Request\RequestInterface;

/**
 * Class AnimeMoreInfoRequest
 *
 * @package Jikan\Request\Anime
 */
class AnimeMoreInfoRequest implements RequestInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * AnimeMoreInfoRequest constructor
     *
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * return string
     */
    public function getPath(): string
    {
        return sprintf(Constants::BASE_URL.'/anime/%s/moreinfo', $this->id);
    }
}

<?php

namespace Jikan\Request\Anime;

use Jikan\Helper\Constants;
use Jikan\Request\RequestInterface;

/**
 * Class AnimeStatsRequest
 *
 * @package Jikan\Request
 */
class AnimeStatsRequest implements RequestInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * AnimeStatsRequest constructor.
     *
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return sprintf(Constants::BASE_URL.'/anime/%d/stats', $this->id);
    }
}

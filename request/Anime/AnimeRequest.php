<?php

namespace Jikan\Request\Anime;

use Jikan\Helper\Constants;
use Jikan\Request\RequestInterface;

/**
 * Class AnimeRequest
 *
 * @package Jikan\Request
 */
class AnimeRequest implements RequestInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * AnimeRequest constructor.
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
        return sprintf(Constants::BASE_URL.'/anime/%d', $this->id);
    }
}

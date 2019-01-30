<?php

namespace Jikan\Request\Anime;


use Jikan\Helper\Constants;
use Jikan\Request\RequestInterface;

/**
 * Class AnimeEpisodes
 *
 * @package Jikan\Request
 */
class AnimeEpisodesRequest implements RequestInterface
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
     * AnimeEpisodesRequest constructor.
     *
     * @param int $id
     * @param int $page
     *
     */
    public function __construct(int $id, int $page = 1)
    {
        $this->id = $id;
        $this->page = ($page - 1) * 100;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return sprintf(Constants::BASE_URL.'/anime/%s/episodes/%d', $this->id, $this->page);
    }
}

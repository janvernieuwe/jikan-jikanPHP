<?php

namespace Jikan\Request\Manga;

use Jikan\Helper\Constants;
use Jikan\Request\RequestInterface;

/**
 * Class MangaStatsRequest
 *
 * @package Jikan\Request
 */
class MangaStatsRequest implements RequestInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * MangaStatsRequest constructor.
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
        return sprintf(Constants::BASE_URL.'/manga/%d/stats', $this->id);
    }
}

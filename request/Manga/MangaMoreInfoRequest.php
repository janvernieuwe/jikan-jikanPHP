<?php

namespace JikanPHP\Request\Manga;

use JikanPHP\Helper\Constants;
use JikanPHP\Request\RequestInterface;

/**
 * Class MangaMoreInfoRequest
 *
 * @package JikanPHP\Request\Manga
 */
class MangaMoreInfoRequest implements RequestInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * MangaMoreInfoRequest constructor
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
        return sprintf(Constants::BASE_URL.'/manga/%d/moreinfo', $this->id);
    }
}

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
    public function getPath($baseUrl): string
    {
        return sprintf('%s/manga/%d/moreinfo', $baseUrl, $this->id);
    }
}

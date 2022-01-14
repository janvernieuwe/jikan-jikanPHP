<?php

namespace JikanPHP\Request\Manga;

use JikanPHP\Helper\Constants;
use JikanPHP\Request\RequestInterface;

/**
 * Class MangaRequest
 *
 * @package JikanPHP\Request
 */
class MangaRequest implements RequestInterface
{

    /**
     * @var int
     */
    private $id;

    /**
     * MangaRequest constructor.
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
    public function getPath($baseUrl): string
    {
        return sprintf('%s/manga/%d', $baseUrl, $this->id);
    }
}

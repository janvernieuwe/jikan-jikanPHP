<?php

namespace JikanPHP\Request\Manga;

use JikanPHP\Helper\Constants;
use JikanPHP\Request\RequestInterface;

/**
 * Class MangaCharactersRequest
 *
 * @package JikanPHP\Request
 */
class MangaCharactersRequest implements RequestInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * MangaCharactersRequest constructor.
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
        return sprintf('%s/manga/%d/characters', $baseUrl, $this->id);
    }
}

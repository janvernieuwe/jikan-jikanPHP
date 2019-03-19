<?php

namespace JikanPHP\Request\Manga;

use JikanPHP\Helper\Constants;
use JikanPHP\Request\RequestInterface;

/**
 * Class MangaNewsRequest
 *
 * @package JikanPHP\Request
 */
class MangaNewsRequest implements RequestInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * MangaNewsRequest constructor.
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
        return sprintf(Constants::BASE_URL.'/manga/%d/news', $this->id);
    }
}

<?php

namespace JikanPHP\Request\Anime;

use JikanPHP\Helper\Constants;
use JikanPHP\Request\RequestInterface;

/**
 * Class AnimeRequest
 *
 * @package JikanPHP\Request
 */
class AnimeCharactersAndStaffRequest implements RequestInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * AnimeCharactersAndStaffRequest constructor.
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
        return sprintf('%s/anime/%d/characters_staff', $baseUrl, $this->id);
    }
}

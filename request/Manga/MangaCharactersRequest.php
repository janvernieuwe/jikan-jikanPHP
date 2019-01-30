<?php

namespace Jikan\Request\Manga;

use Jikan\Helper\Constants;
use Jikan\Request\RequestInterface;

/**
 * Class MangaCharactersRequest
 *
 * @package Jikan\Request
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
    public function getPath(): string
    {
        return sprintf(Constants::BASE_URL.'/manga/%d/characters', $this->id);
    }
}

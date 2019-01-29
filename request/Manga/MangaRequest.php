<?php

namespace Jikan\Request\Manga;

use Jikan\Request\RequestInterface;

/**
 * Class MangaRequest
 *
 * @package Jikan\Request
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
    public function getPath(): string
    {
        return sprintf('https://api.jikan.moe/v3/manga/%s', $this->id);
    }
}

<?php

namespace Jikan\Request\Manga;

use Jikan\Helper\Constants;
use Jikan\Request\RequestInterface;

/**
 * Class MangaPicturesRequest
 *
 * @package Jikan\Request
 */
class MangaPicturesRequest implements RequestInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * MangaPicturesRequest constructor.
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
        return sprintf(Constants::BASE_URL.'/manga/%d/pictures', $this->id);
    }
}

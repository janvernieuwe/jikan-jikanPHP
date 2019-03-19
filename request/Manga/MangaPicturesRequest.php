<?php

namespace JikanPHP\Request\Manga;

use JikanPHP\Helper\Constants;
use JikanPHP\Request\RequestInterface;

/**
 * Class MangaPicturesRequest
 *
 * @package JikanPHP\Request
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

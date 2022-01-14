<?php

namespace JikanPHP\Request\Anime;

use JikanPHP\Helper\Constants;
use JikanPHP\Request\RequestInterface;

/**
 * Class AnimePictures
 *
 * @package JikanPHP\Request
 */
class AnimePicturesRequest implements RequestInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * AnimePicturesRequest constructor.
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
        return sprintf('%s/anime/%d/pictures', $baseUrl, $this->id);
    }
}

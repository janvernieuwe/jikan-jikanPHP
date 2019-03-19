<?php

namespace JikanPHP\Request\Character;

use JikanPHP\Helper\Constants;
use JikanPHP\Request\RequestInterface;

/**
 * Class CharacterPictures
 *
 * @package JikanPHP\Request
 */
class CharacterPicturesRequest implements RequestInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * CharacterPicturesRequest constructor.
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
        return sprintf(Constants::BASE_URL.'/character/%d/pictures', $this->id);
    }
}

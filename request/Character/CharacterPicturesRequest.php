<?php

namespace Jikan\Request\Character;

use Jikan\Helper\Constants;
use Jikan\Request\RequestInterface;

/**
 * Class CharacterPictures
 *
 * @package Jikan\Request
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

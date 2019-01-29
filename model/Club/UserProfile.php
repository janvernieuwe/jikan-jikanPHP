<?php

namespace Jikan\Model\Club;

/**
 * Class UserProfile
 *
 * @package Jikan\Model\Club
 */
class UserProfile
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $imageUrl;

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }
}

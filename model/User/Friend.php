<?php

namespace Jikan\Model\User;

/**
 * Class Friend
 *
 * @package Jikan\Model
 */
class Friend
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $imageUrl;


    /**
     * @var \DateTimeImmutable
     */
    private $lastOnline;

    /**
     * @var \DateTimeImmutable
     */
    private $friendsSince;

    /**
     * @return string
     */
    public function __toString()
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
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getLastOnline(): \DateTimeImmutable
    {
        return $this->lastOnline;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getFriendsSince(): \DateTimeImmutable
    {
        return $this->friendsSince;
    }
}

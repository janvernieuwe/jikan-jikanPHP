<?php

namespace Jikan\Model\Club;

/**
 * Class UserList
 *
 * @package Jikan\Model\Club
 */
class UserList
{
    /**
     * @var UserProfile[]
     */
    private $profiles = [];

    /**
     * @return UserProfile[]
     */
    public function getProfiles(): array
    {
        return $this->profiles;
    }
}

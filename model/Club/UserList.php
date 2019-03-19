<?php

namespace JikanPHP\Model\Club;

/**
 * Class UserList
 *
 * @package JikanPHP\Model\Club
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

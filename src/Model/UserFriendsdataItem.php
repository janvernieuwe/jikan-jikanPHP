<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UserFriendsdataItem
{
    /**
     * @var UserMeta
     */
    protected $user;

    /**
     * Last Online Date ISO8601 format.
     *
     * @var string
     */
    protected $lastOnline;

    /**
     * Friends Since Date ISO8601 format.
     *
     * @var string
     */
    protected $friendsSince;

    public function getUser(): UserMeta
    {
        return $this->user;
    }

    public function setUser(UserMeta $userMeta): self
    {
        $this->user = $userMeta;

        return $this;
    }

    /**
     * Last Online Date ISO8601 format.
     */
    public function getLastOnline(): string
    {
        return $this->lastOnline;
    }

    /**
     * Last Online Date ISO8601 format.
     */
    public function setLastOnline(string $lastOnline): self
    {
        $this->lastOnline = $lastOnline;

        return $this;
    }

    /**
     * Friends Since Date ISO8601 format.
     */
    public function getFriendsSince(): string
    {
        return $this->friendsSince;
    }

    /**
     * Friends Since Date ISO8601 format.
     */
    public function setFriendsSince(string $friendsSince): self
    {
        $this->friendsSince = $friendsSince;

        return $this;
    }
}

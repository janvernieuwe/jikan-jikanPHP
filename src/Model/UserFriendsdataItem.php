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

    /**
     * @return UserMeta
     */
    public function getUser(): UserMeta
    {
        return $this->user;
    }

    /**
     * @param UserMeta $user
     *
     * @return self
     */
    public function setUser(UserMeta $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Last Online Date ISO8601 format.
     *
     * @return string
     */
    public function getLastOnline(): string
    {
        return $this->lastOnline;
    }

    /**
     * Last Online Date ISO8601 format.
     *
     * @param string $lastOnline
     *
     * @return self
     */
    public function setLastOnline(string $lastOnline): self
    {
        $this->lastOnline = $lastOnline;

        return $this;
    }

    /**
     * Friends Since Date ISO8601 format.
     *
     * @return string
     */
    public function getFriendsSince(): string
    {
        return $this->friendsSince;
    }

    /**
     * Friends Since Date ISO8601 format.
     *
     * @param string $friendsSince
     *
     * @return self
     */
    public function setFriendsSince(string $friendsSince): self
    {
        $this->friendsSince = $friendsSince;

        return $this;
    }
}

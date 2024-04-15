<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UserFriendsdataItem extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

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

    public function setUser(UserMeta $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;

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
        $this->initialized['lastOnline'] = true;
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
        $this->initialized['friendsSince'] = true;
        $this->friendsSince = $friendsSince;

        return $this;
    }
}

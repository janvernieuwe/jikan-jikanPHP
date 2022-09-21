<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class RandomUsersGetResponse200
{
    /**
     * @var UserProfile
     */
    protected $data;

    public function getData(): UserProfile
    {
        return $this->data;
    }

    public function setData(UserProfile $userProfile): self
    {
        $this->data = $userProfile;

        return $this;
    }
}

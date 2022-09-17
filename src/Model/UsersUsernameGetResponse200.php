<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UsersUsernameGetResponse200
{
    /**
     * @var UserProfile
     */
    protected $data;

    /**
     * @return UserProfile
     */
    public function getData(): UserProfile
    {
        return $this->data;
    }

    /**
     * @param UserProfile $data
     *
     * @return self
     */
    public function setData(UserProfile $data): self
    {
        $this->data = $data;

        return $this;
    }
}

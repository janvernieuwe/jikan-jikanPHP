<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UsersUsernameFullGetResponse200
{
    /**
     * Transform the resource into an array.
     *
     * @var UserProfileFull
     */
    protected $data;

    /**
     * Transform the resource into an array.
     *
     * @return UserProfileFull
     */
    public function getData(): UserProfileFull
    {
        return $this->data;
    }

    /**
     * Transform the resource into an array.
     *
     * @param UserProfileFull $data
     *
     * @return self
     */
    public function setData(UserProfileFull $data): self
    {
        $this->data = $data;

        return $this;
    }
}

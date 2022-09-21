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
     */
    public function getData(): UserProfileFull
    {
        return $this->data;
    }

    /**
     * Transform the resource into an array.
     */
    public function setData(UserProfileFull $userProfileFull): self
    {
        $this->data = $userProfileFull;

        return $this;
    }
}

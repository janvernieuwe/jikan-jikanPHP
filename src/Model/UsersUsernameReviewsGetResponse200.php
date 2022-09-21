<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UsersUsernameReviewsGetResponse200
{
    /**
     * @var UsersUsernameReviewsGetResponse200Data
     */
    protected $data;

    public function getData(): UsersUsernameReviewsGetResponse200Data
    {
        return $this->data;
    }

    public function setData(UsersUsernameReviewsGetResponse200Data $usersUsernameReviewsGetResponse200Data): self
    {
        $this->data = $usersUsernameReviewsGetResponse200Data;

        return $this;
    }
}

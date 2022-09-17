<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UsersUsernameReviewsGetResponse200
{
    /**
     * @var UsersUsernameReviewsGetResponse200Data
     */
    protected $data;

    /**
     * @return UsersUsernameReviewsGetResponse200Data
     */
    public function getData(): UsersUsernameReviewsGetResponse200Data
    {
        return $this->data;
    }

    /**
     * @param UsersUsernameReviewsGetResponse200Data $data
     *
     * @return self
     */
    public function setData(UsersUsernameReviewsGetResponse200Data $data): self
    {
        $this->data = $data;

        return $this;
    }
}

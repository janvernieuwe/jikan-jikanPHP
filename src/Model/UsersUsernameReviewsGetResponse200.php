<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class UsersUsernameReviewsGetResponse200 extends ArrayObject
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
     * @var UsersUsernameReviewsGetResponse200Data
     */
    protected $data;

    public function getData(): UsersUsernameReviewsGetResponse200Data
    {
        return $this->data;
    }

    public function setData(UsersUsernameReviewsGetResponse200Data $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}

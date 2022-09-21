<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UsersUserbyidIdGetResponse200
{
    /**
     * User Meta By ID.
     *
     * @var UserById
     */
    protected $data;

    /**
     * User Meta By ID.
     */
    public function getData(): UserById
    {
        return $this->data;
    }

    /**
     * User Meta By ID.
     */
    public function setData(UserById $userById): self
    {
        $this->data = $userById;

        return $this;
    }
}

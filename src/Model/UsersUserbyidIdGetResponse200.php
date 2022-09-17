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
     *
     * @return UserById
     */
    public function getData(): UserById
    {
        return $this->data;
    }

    /**
     * User Meta By ID.
     *
     * @param UserById $data
     *
     * @return self
     */
    public function setData(UserById $data): self
    {
        $this->data = $data;

        return $this;
    }
}

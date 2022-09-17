<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UserUpdates
{
    /**
     * @var UserUpdatesData
     */
    protected $data;

    /**
     * @return UserUpdatesData
     */
    public function getData(): UserUpdatesData
    {
        return $this->data;
    }

    /**
     * @param UserUpdatesData $data
     *
     * @return self
     */
    public function setData(UserUpdatesData $data): self
    {
        $this->data = $data;

        return $this;
    }
}

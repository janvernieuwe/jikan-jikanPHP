<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UserUpdates
{
    /**
     * @var UserUpdatesData
     */
    protected $data;

    public function getData(): UserUpdatesData
    {
        return $this->data;
    }

    public function setData(UserUpdatesData $userUpdatesData): self
    {
        $this->data = $userUpdatesData;

        return $this;
    }
}

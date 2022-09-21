<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UsersTemp
{
    /**
     * @var UsersTempDataItem[]
     */
    protected $data = [];

    /**
     * @return UsersTempDataItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param UsersTempDataItem[] $data
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}

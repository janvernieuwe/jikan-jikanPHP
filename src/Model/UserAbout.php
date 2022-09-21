<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UserAbout
{
    /**
     * @var UserAboutDataItem[]
     */
    protected $data = [];

    /**
     * @return UserAboutDataItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param UserAboutDataItem[] $data
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}

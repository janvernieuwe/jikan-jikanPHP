<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class PersonPictures
{
    /**
     * @var PeopleImages[]
     */
    protected $data = [];

    /**
     * @return PeopleImages[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param PeopleImages[] $data
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}

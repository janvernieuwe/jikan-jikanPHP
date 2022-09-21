<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class ClubMember
{
    /**
     * @var UserImages[]
     */
    protected $data = [];

    /**
     * @return UserImages[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param UserImages[] $data
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}

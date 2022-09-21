<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class ClubStaff
{
    /**
     * @var ClubStaffDataItem[]
     */
    protected $data = [];

    /**
     * @return ClubStaffDataItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param ClubStaffDataItem[] $data
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}

<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class ClubStaff extends \ArrayObject
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
     * @var list<ClubStaffDataItem>
     */
    protected $data;

    /**
     * @return list<ClubStaffDataItem>
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param list<ClubStaffDataItem> $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}

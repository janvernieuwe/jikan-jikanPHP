<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UserUpdates extends \ArrayObject
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
     * @var UserUpdatesData
     */
    protected $data;

    public function getData(): UserUpdatesData
    {
        return $this->data;
    }

    public function setData(UserUpdatesData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}

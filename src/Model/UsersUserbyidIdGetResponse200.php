<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class UsersUserbyidIdGetResponse200 extends ArrayObject
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
     * User Meta By ID.
     *
     * @var UserById
     */
    protected $data;

    /**
     * User Meta By ID.
     */
    public function getData(): UserById
    {
        return $this->data;
    }

    /**
     * User Meta By ID.
     */
    public function setData(UserById $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}

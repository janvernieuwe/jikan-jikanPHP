<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class ClubsIdGetResponse200 extends \ArrayObject
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
     * Club Resource.
     *
     * @var Club
     */
    protected $data;

    /**
     * Club Resource.
     */
    public function getData(): Club
    {
        return $this->data;
    }

    /**
     * Club Resource.
     */
    public function setData(Club $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}

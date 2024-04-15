<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UserStatistics extends \ArrayObject
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
     * @var UserStatisticsData
     */
    protected $data;

    public function getData(): UserStatisticsData
    {
        return $this->data;
    }

    public function setData(UserStatisticsData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}

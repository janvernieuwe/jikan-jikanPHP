<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class MangaStatistics extends \ArrayObject
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
     * @var MangaStatisticsData
     */
    protected $data;

    public function getData(): MangaStatisticsData
    {
        return $this->data;
    }

    public function setData(MangaStatisticsData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}

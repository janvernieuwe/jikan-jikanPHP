<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeStatistics extends \ArrayObject
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
     * @var AnimeStatisticsData
     */
    protected $data;

    public function getData(): AnimeStatisticsData
    {
        return $this->data;
    }

    public function setData(AnimeStatisticsData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}

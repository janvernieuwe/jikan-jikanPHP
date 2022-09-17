<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class MangaStatistics
{
    /**
     * @var MangaStatisticsData
     */
    protected $data;

    /**
     * @return MangaStatisticsData
     */
    public function getData(): MangaStatisticsData
    {
        return $this->data;
    }

    /**
     * @param MangaStatisticsData $data
     *
     * @return self
     */
    public function setData(MangaStatisticsData $data): self
    {
        $this->data = $data;

        return $this;
    }
}

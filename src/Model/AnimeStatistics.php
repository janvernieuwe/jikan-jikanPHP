<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeStatistics
{
    /**
     * @var AnimeStatisticsData
     */
    protected $data;

    /**
     * @return AnimeStatisticsData
     */
    public function getData(): AnimeStatisticsData
    {
        return $this->data;
    }

    /**
     * @param AnimeStatisticsData $data
     *
     * @return self
     */
    public function setData(AnimeStatisticsData $data): self
    {
        $this->data = $data;

        return $this;
    }
}

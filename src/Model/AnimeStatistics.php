<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeStatistics
{
    /**
     * @var AnimeStatisticsData
     */
    protected $data;

    public function getData(): AnimeStatisticsData
    {
        return $this->data;
    }

    public function setData(AnimeStatisticsData $animeStatisticsData): self
    {
        $this->data = $animeStatisticsData;

        return $this;
    }
}

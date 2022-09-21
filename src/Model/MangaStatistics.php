<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class MangaStatistics
{
    /**
     * @var MangaStatisticsData
     */
    protected $data;

    public function getData(): MangaStatisticsData
    {
        return $this->data;
    }

    public function setData(MangaStatisticsData $mangaStatisticsData): self
    {
        $this->data = $mangaStatisticsData;

        return $this;
    }
}

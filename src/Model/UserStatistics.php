<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UserStatistics
{
    /**
     * @var UserStatisticsData
     */
    protected $data;

    public function getData(): UserStatisticsData
    {
        return $this->data;
    }

    public function setData(UserStatisticsData $userStatisticsData): self
    {
        $this->data = $userStatisticsData;

        return $this;
    }
}

<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UserStatistics
{
    /**
     * @var UserStatisticsData
     */
    protected $data;

    /**
     * @return UserStatisticsData
     */
    public function getData(): UserStatisticsData
    {
        return $this->data;
    }

    /**
     * @param UserStatisticsData $data
     *
     * @return self
     */
    public function setData(UserStatisticsData $data): self
    {
        $this->data = $data;

        return $this;
    }
}

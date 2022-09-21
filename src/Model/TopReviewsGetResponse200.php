<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class TopReviewsGetResponse200
{
    /**
     * @var TopReviewsGetResponse200Data
     */
    protected $data;

    public function getData(): TopReviewsGetResponse200Data
    {
        return $this->data;
    }

    public function setData(TopReviewsGetResponse200Data $topReviewsGetResponse200Data): self
    {
        $this->data = $topReviewsGetResponse200Data;

        return $this;
    }
}

<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class TopReviewsGetResponse200
{
    /**
     * @var TopReviewsGetResponse200Data
     */
    protected $data;

    /**
     * @return TopReviewsGetResponse200Data
     */
    public function getData(): TopReviewsGetResponse200Data
    {
        return $this->data;
    }

    /**
     * @param TopReviewsGetResponse200Data $data
     *
     * @return self
     */
    public function setData(TopReviewsGetResponse200Data $data): self
    {
        $this->data = $data;

        return $this;
    }
}

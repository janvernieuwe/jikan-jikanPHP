<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class TopReviewsGetResponse200 extends ArrayObject
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
     * @var TopReviewsGetResponse200Data
     */
    protected $data;

    public function getData(): TopReviewsGetResponse200Data
    {
        return $this->data;
    }

    public function setData(TopReviewsGetResponse200Data $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}

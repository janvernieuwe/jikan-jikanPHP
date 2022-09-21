<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class ReviewsCollection
{
    /**
     * @var mixed[]
     */
    protected $data = [];

    /**
     * @return mixed[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param mixed[] $data
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}

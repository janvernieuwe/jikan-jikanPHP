<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class StreamingLinks
{
    /**
     * @var StreamingLinksDataItem[]
     */
    protected $data = [];

    /**
     * @return StreamingLinksDataItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param StreamingLinksDataItem[] $data
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}

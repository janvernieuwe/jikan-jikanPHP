<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class ExternalLinks
{
    /**
     * @var ExternalLinksDataItem[]
     */
    protected $data;

    /**
     * @return ExternalLinksDataItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param ExternalLinksDataItem[] $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}

<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class EntryRecommendations
{
    /**
     * @var EntryRecommendationsDataItem[]
     */
    protected $data = [];

    /**
     * @return EntryRecommendationsDataItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param EntryRecommendationsDataItem[] $data
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}

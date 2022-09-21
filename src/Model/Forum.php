<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class Forum
{
    /**
     * @var ForumDataItem[]
     */
    protected $data = [];

    /**
     * @return ForumDataItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param ForumDataItem[] $data
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}

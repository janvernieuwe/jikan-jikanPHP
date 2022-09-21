<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class EntryRecommendationsDataItem
{
    /**
     * @var mixed
     */
    protected $entry;

    /**
     * @return mixed
     */
    public function getEntry()
    {
        return $this->entry;
    }

    public function setEntry(mixed $entry): self
    {
        $this->entry = $entry;

        return $this;
    }
}

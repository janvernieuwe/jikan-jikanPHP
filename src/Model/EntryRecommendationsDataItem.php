<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class EntryRecommendationsDataItem
{
    protected $entry;

    public function getEntry()
    {
        return $this->entry;
    }

    public function setEntry($entry): self
    {
        $this->entry = $entry;

        return $this;
    }
}

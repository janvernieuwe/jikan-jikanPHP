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

    /**
     * @param mixed $entry
     *
     * @return self
     */
    public function setEntry($entry): self
    {
        $this->entry = $entry;

        return $this;
    }
}

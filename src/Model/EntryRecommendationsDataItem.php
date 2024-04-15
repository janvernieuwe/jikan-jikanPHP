<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class EntryRecommendationsDataItem extends \ArrayObject
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
     * @var array<string, mixed>
     */
    protected $entry;

    /**
     * @return array<string, mixed>
     */
    public function getEntry(): iterable
    {
        return $this->entry;
    }

    /**
     * @param array<string, mixed> $entry
     */
    public function setEntry(iterable $entry): self
    {
        $this->initialized['entry'] = true;
        $this->entry = $entry;

        return $this;
    }
}

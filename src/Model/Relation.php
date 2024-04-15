<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class Relation extends \ArrayObject
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
     * Relation type.
     *
     * @var string
     */
    protected $relation;

    /**
     * Related entries.
     *
     * @var list<MalUrl>
     */
    protected $entry;

    /**
     * Relation type.
     */
    public function getRelation(): string
    {
        return $this->relation;
    }

    /**
     * Relation type.
     */
    public function setRelation(string $relation): self
    {
        $this->initialized['relation'] = true;
        $this->relation = $relation;

        return $this;
    }

    /**
     * Related entries.
     *
     * @return list<MalUrl>
     */
    public function getEntry(): array
    {
        return $this->entry;
    }

    /**
     * Related entries.
     *
     * @param list<MalUrl> $entry
     */
    public function setEntry(array $entry): self
    {
        $this->initialized['entry'] = true;
        $this->entry = $entry;

        return $this;
    }
}

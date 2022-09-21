<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class Relation
{
    /**
     * Relation type.
     *
     * @var string
     */
    protected $relation;

    /**
     * Related entries.
     *
     * @var MalUrl[]
     */
    protected $entry = [];

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
        $this->relation = $relation;

        return $this;
    }

    /**
     * Related entries.
     *
     * @return MalUrl[]
     */
    public function getEntry(): array
    {
        return $this->entry;
    }

    /**
     * Related entries.
     *
     * @param MalUrl[] $entry
     */
    public function setEntry(array $entry): self
    {
        $this->entry = $entry;

        return $this;
    }
}

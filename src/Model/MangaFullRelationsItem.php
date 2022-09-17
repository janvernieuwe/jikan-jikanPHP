<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class MangaFullRelationsItem
{
    /**
     * Relation type.
     *
     * @var string
     */
    protected $relation;
    /**
     * @var MalUrl[]
     */
    protected $entry;

    /**
     * Relation type.
     *
     * @return string
     */
    public function getRelation(): string
    {
        return $this->relation;
    }

    /**
     * Relation type.
     *
     * @param string $relation
     *
     * @return self
     */
    public function setRelation(string $relation): self
    {
        $this->relation = $relation;

        return $this;
    }

    /**
     * @return MalUrl[]
     */
    public function getEntry(): array
    {
        return $this->entry;
    }

    /**
     * @param MalUrl[] $entry
     *
     * @return self
     */
    public function setEntry(array $entry): self
    {
        $this->entry = $entry;

        return $this;
    }
}

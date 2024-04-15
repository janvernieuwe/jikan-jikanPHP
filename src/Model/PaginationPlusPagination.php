<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class PaginationPlusPagination extends ArrayObject
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
     * @var int
     */
    protected $lastVisiblePage;

    /**
     * @var bool
     */
    protected $hasNextPage;

    /**
     * @var PaginationPlusPaginationItems
     */
    protected $items;

    public function getLastVisiblePage(): int
    {
        return $this->lastVisiblePage;
    }

    public function setLastVisiblePage(int $lastVisiblePage): self
    {
        $this->initialized['lastVisiblePage'] = true;
        $this->lastVisiblePage = $lastVisiblePage;

        return $this;
    }

    public function getHasNextPage(): bool
    {
        return $this->hasNextPage;
    }

    public function setHasNextPage(bool $hasNextPage): self
    {
        $this->initialized['hasNextPage'] = true;
        $this->hasNextPage = $hasNextPage;

        return $this;
    }

    public function getItems(): PaginationPlusPaginationItems
    {
        return $this->items;
    }

    public function setItems(PaginationPlusPaginationItems $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;

        return $this;
    }
}

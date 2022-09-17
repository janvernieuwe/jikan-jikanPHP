<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class PaginationPlusPagination
{
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

    /**
     * @return int
     */
    public function getLastVisiblePage(): int
    {
        return $this->lastVisiblePage;
    }

    /**
     * @param int $lastVisiblePage
     *
     * @return self
     */
    public function setLastVisiblePage(int $lastVisiblePage): self
    {
        $this->lastVisiblePage = $lastVisiblePage;

        return $this;
    }

    /**
     * @return bool
     */
    public function getHasNextPage(): bool
    {
        return $this->hasNextPage;
    }

    /**
     * @param bool $hasNextPage
     *
     * @return self
     */
    public function setHasNextPage(bool $hasNextPage): self
    {
        $this->hasNextPage = $hasNextPage;

        return $this;
    }

    /**
     * @return PaginationPlusPaginationItems
     */
    public function getItems(): PaginationPlusPaginationItems
    {
        return $this->items;
    }

    /**
     * @param PaginationPlusPaginationItems $items
     *
     * @return self
     */
    public function setItems(PaginationPlusPaginationItems $items): self
    {
        $this->items = $items;

        return $this;
    }
}

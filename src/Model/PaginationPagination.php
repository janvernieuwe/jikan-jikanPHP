<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class PaginationPagination
{
    /**
     * @var int
     */
    protected $lastVisiblePage;

    /**
     * @var bool
     */
    protected $hasNextPage = false;

    public function getLastVisiblePage(): int
    {
        return $this->lastVisiblePage;
    }

    public function setLastVisiblePage(int $lastVisiblePage): self
    {
        $this->lastVisiblePage = $lastVisiblePage;

        return $this;
    }

    public function getHasNextPage(): bool
    {
        return $this->hasNextPage;
    }

    public function setHasNextPage(bool $hasNextPage): self
    {
        $this->hasNextPage = $hasNextPage;

        return $this;
    }
}

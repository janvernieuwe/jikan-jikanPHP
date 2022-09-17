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
    protected $hasNextPage;

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
}

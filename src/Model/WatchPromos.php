<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class WatchPromos
{
    /**
     * @var PaginationPagination
     */
    protected $pagination;

    /**
     * Promo Title.
     *
     * @var string
     */
    protected $title;

    /**
     * @var object[]
     */
    protected $data = [];

    public function getPagination(): PaginationPagination
    {
        return $this->pagination;
    }

    public function setPagination(PaginationPagination $paginationPagination): self
    {
        $this->pagination = $paginationPagination;

        return $this;
    }

    /**
     * Promo Title.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Promo Title.
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return object[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param object[] $data
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}

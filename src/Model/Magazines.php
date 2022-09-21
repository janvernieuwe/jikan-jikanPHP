<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class Magazines
{
    /**
     * @var Magazine[]
     */
    protected $data = [];

    /**
     * @var PaginationPagination
     */
    protected $pagination;

    /**
     * @return Magazine[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param Magazine[] $data
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getPagination(): PaginationPagination
    {
        return $this->pagination;
    }

    public function setPagination(PaginationPagination $paginationPagination): self
    {
        $this->pagination = $paginationPagination;

        return $this;
    }
}

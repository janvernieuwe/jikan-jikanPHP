<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class Pagination
{
    /**
     * @var PaginationPagination
     */
    protected $pagination;

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

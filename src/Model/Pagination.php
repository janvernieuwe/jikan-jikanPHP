<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class Pagination
{
    /**
     * @var PaginationPagination
     */
    protected $pagination;

    /**
     * @return PaginationPagination
     */
    public function getPagination(): PaginationPagination
    {
        return $this->pagination;
    }

    /**
     * @param PaginationPagination $pagination
     *
     * @return self
     */
    public function setPagination(PaginationPagination $pagination): self
    {
        $this->pagination = $pagination;

        return $this;
    }
}

<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class PaginationPlus
{
    /**
     * @var PaginationPlusPagination
     */
    protected $pagination;

    public function getPagination(): PaginationPlusPagination
    {
        return $this->pagination;
    }

    public function setPagination(PaginationPlusPagination $paginationPlusPagination): self
    {
        $this->pagination = $paginationPlusPagination;

        return $this;
    }
}

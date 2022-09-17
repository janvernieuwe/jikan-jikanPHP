<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class PaginationPlus
{
    /**
     * @var PaginationPlusPagination
     */
    protected $pagination;

    /**
     * @return PaginationPlusPagination
     */
    public function getPagination(): PaginationPlusPagination
    {
        return $this->pagination;
    }

    /**
     * @param PaginationPlusPagination $pagination
     *
     * @return self
     */
    public function setPagination(PaginationPlusPagination $pagination): self
    {
        $this->pagination = $pagination;

        return $this;
    }
}

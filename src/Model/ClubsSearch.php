<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class ClubsSearch
{
    /**
     * @var Club[]
     */
    protected $data;
    /**
     * @var PaginationPagination
     */
    protected $pagination;

    /**
     * @return Club[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param Club[] $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }

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

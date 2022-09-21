<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class Schedules
{
    /**
     * @var Anime[]
     */
    protected $data = [];

    /**
     * @var PaginationPlusPagination
     */
    protected $pagination;

    /**
     * @return Anime[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param Anime[] $data
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }

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

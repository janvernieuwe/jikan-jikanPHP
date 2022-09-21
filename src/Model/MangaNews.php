<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class MangaNews
{
    /**
     * @var PaginationPagination
     */
    protected $pagination;

    /**
     * @var NewsDataItem[]
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
     * @return NewsDataItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param NewsDataItem[] $data
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}

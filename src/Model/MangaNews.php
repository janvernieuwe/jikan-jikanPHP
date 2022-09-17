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
    protected $data;

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

    /**
     * @return NewsDataItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param NewsDataItem[] $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}

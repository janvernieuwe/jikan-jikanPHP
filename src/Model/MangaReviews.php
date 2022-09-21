<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class MangaReviews
{
    /**
     * @var MangaReviewsdataItem[]
     */
    protected $data = [];

    /**
     * @var PaginationPagination
     */
    protected $pagination;

    /**
     * @return MangaReviewsdataItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param MangaReviewsdataItem[] $data
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

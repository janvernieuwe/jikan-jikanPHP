<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class WatchPromos
{
    /**
     * @var PaginationPagination
     */
    protected $pagination;
    /**
     * Promo Title.
     *
     * @var string
     */
    protected $title;
    /**
     * @var object[]
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
     * Promo Title.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Promo Title.
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return object[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param object[] $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}

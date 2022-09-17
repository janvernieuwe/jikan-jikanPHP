<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeEpisodes
{
    /**
     * @var AnimeEpisodesdataItem[]
     */
    protected $data;
    /**
     * @var PaginationPagination
     */
    protected $pagination;

    /**
     * @return AnimeEpisodesdataItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param AnimeEpisodesdataItem[] $data
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

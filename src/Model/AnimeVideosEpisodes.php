<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeVideosEpisodes
{
    /**
     * @var AnimeVideosEpisodesdataItem[]
     */
    protected $data = [];

    /**
     * @var PaginationPagination
     */
    protected $pagination;

    /**
     * @return AnimeVideosEpisodesdataItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param AnimeVideosEpisodesdataItem[] $data
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

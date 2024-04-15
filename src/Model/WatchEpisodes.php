<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class WatchEpisodes extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * @var list<WatchEpisodesdataItem>
     */
    protected $data;

    /**
     * @var PaginationPagination
     */
    protected $pagination;

    /**
     * @return list<WatchEpisodesdataItem>
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param list<WatchEpisodesdataItem> $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    public function getPagination(): PaginationPagination
    {
        return $this->pagination;
    }

    public function setPagination(PaginationPagination $pagination): self
    {
        $this->initialized['pagination'] = true;
        $this->pagination = $pagination;

        return $this;
    }
}

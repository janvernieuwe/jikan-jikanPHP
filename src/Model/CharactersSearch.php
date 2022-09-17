<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class CharactersSearch
{
    /**
     * @var Character[]
     */
    protected $data;
    /**
     * @var PaginationPlusPagination
     */
    protected $pagination;

    /**
     * @return Character[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param Character[] $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }

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

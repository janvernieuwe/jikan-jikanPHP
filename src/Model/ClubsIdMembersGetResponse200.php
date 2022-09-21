<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class ClubsIdMembersGetResponse200
{
    /**
     * @var PaginationPagination
     */
    protected $pagination;

    /**
     * @var UserImages[]
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
     * @return UserImages[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param UserImages[] $data
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}

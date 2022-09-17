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
     * @return UserImages[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param UserImages[] $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}

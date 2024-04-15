<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class CharactersSearch extends \ArrayObject
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
     * @var list<Character>
     */
    protected $data;

    /**
     * @var PaginationPlusPagination
     */
    protected $pagination;

    /**
     * @return list<Character>
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param list<Character> $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    public function getPagination(): PaginationPlusPagination
    {
        return $this->pagination;
    }

    public function setPagination(PaginationPlusPagination $pagination): self
    {
        $this->initialized['pagination'] = true;
        $this->pagination = $pagination;

        return $this;
    }
}

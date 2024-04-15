<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class WatchPromos extends \ArrayObject
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
     * @var list<object>
     */
    protected $data;

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

    /**
     * Promo Title.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Promo Title.
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }

    /**
     * @return list<object>
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param list<object> $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}

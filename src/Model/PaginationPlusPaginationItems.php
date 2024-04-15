<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class PaginationPlusPaginationItems extends \ArrayObject
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
     * @var int
     */
    protected $count;

    /**
     * @var int
     */
    protected $total;

    /**
     * @var int
     */
    protected $perPage;

    public function getCount(): int
    {
        return $this->count;
    }

    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;

        return $this;
    }

    public function getTotal(): int
    {
        return $this->total;
    }

    public function setTotal(int $total): self
    {
        $this->initialized['total'] = true;
        $this->total = $total;

        return $this;
    }

    public function getPerPage(): int
    {
        return $this->perPage;
    }

    public function setPerPage(int $perPage): self
    {
        $this->initialized['perPage'] = true;
        $this->perPage = $perPage;

        return $this;
    }
}

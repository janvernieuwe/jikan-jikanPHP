<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class Genres
{
    /**
     * @var Genre[]
     */
    protected $data;

    /**
     * @return Genre[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param Genre[] $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}
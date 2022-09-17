<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class CharactersIdGetResponse200
{
    /**
     * Character Resource.
     *
     * @var Character
     */
    protected $data;

    /**
     * Character Resource.
     *
     * @return Character
     */
    public function getData(): Character
    {
        return $this->data;
    }

    /**
     * Character Resource.
     *
     * @param Character $data
     *
     * @return self
     */
    public function setData(Character $data): self
    {
        $this->data = $data;

        return $this;
    }
}

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
     */
    public function getData(): Character
    {
        return $this->data;
    }

    /**
     * Character Resource.
     */
    public function setData(Character $character): self
    {
        $this->data = $character;

        return $this;
    }
}

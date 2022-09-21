<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class CharactersIdFullGetResponse200
{
    /**
     * Character Resource.
     *
     * @var CharacterFull
     */
    protected $data;

    /**
     * Character Resource.
     */
    public function getData(): CharacterFull
    {
        return $this->data;
    }

    /**
     * Character Resource.
     */
    public function setData(CharacterFull $characterFull): self
    {
        $this->data = $characterFull;

        return $this;
    }
}

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
     *
     * @return CharacterFull
     */
    public function getData(): CharacterFull
    {
        return $this->data;
    }

    /**
     * Character Resource.
     *
     * @param CharacterFull $data
     *
     * @return self
     */
    public function setData(CharacterFull $data): self
    {
        $this->data = $data;

        return $this;
    }
}

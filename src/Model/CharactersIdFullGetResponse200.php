<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class CharactersIdFullGetResponse200 extends \ArrayObject
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
    public function setData(CharacterFull $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}

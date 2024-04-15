<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class CharacterPictures extends \ArrayObject
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
     * @var list<CharacterPicturesDataItem>
     */
    protected $data;

    /**
     * @return list<CharacterPicturesDataItem>
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param list<CharacterPicturesDataItem> $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}

<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class CharacterPictures
{
    /**
     * @var CharacterPicturesDataItem[]
     */
    protected $data = [];

    /**
     * @return CharacterPicturesDataItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param CharacterPicturesDataItem[] $data
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}

<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class CharacterVoiceActors
{
    /**
     * @var CharacterVoiceActorsDataItem[]
     */
    protected $data = [];

    /**
     * @return CharacterVoiceActorsDataItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param CharacterVoiceActorsDataItem[] $data
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}

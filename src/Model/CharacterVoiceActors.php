<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class CharacterVoiceActors extends \ArrayObject
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
     * @var list<CharacterVoiceActorsDataItem>
     */
    protected $data;

    /**
     * @return list<CharacterVoiceActorsDataItem>
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param list<CharacterVoiceActorsDataItem> $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}

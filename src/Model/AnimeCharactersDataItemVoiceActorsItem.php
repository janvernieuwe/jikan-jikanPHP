<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class AnimeCharactersDataItemVoiceActorsItem extends ArrayObject
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
     * @var AnimeCharactersDataItemVoiceActorsItemPerson
     */
    protected $person;

    /**
     * @var string
     */
    protected $language;

    public function getPerson(): AnimeCharactersDataItemVoiceActorsItemPerson
    {
        return $this->person;
    }

    public function setPerson(AnimeCharactersDataItemVoiceActorsItemPerson $person): self
    {
        $this->initialized['person'] = true;
        $this->person = $person;

        return $this;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }
}

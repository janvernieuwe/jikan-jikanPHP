<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class CharacterVoiceActorsDataItem
{
    /**
     * Character's Role.
     *
     * @var string
     */
    protected $language;

    /**
     * @var PersonMeta
     */
    protected $person;

    /**
     * Character's Role.
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * Character's Role.
     */
    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getPerson(): PersonMeta
    {
        return $this->person;
    }

    public function setPerson(PersonMeta $personMeta): self
    {
        $this->person = $personMeta;

        return $this;
    }
}

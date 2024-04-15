<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class CharacterVoiceActorsDataItem extends \ArrayObject
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
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    public function getPerson(): PersonMeta
    {
        return $this->person;
    }

    public function setPerson(PersonMeta $person): self
    {
        $this->initialized['person'] = true;
        $this->person = $person;

        return $this;
    }
}

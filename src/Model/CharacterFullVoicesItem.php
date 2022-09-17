<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class CharacterFullVoicesItem
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
     *
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * Character's Role.
     *
     * @param string $language
     *
     * @return self
     */
    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @return PersonMeta
     */
    public function getPerson(): PersonMeta
    {
        return $this->person;
    }

    /**
     * @param PersonMeta $person
     *
     * @return self
     */
    public function setPerson(PersonMeta $person): self
    {
        $this->person = $person;

        return $this;
    }
}

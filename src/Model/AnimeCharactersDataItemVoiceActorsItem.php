<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeCharactersDataItemVoiceActorsItem
{
    /**
     * @var AnimeCharactersDataItemVoiceActorsItemPerson
     */
    protected $person;
    /**
     * @var string
     */
    protected $language;

    /**
     * @return AnimeCharactersDataItemVoiceActorsItemPerson
     */
    public function getPerson(): AnimeCharactersDataItemVoiceActorsItemPerson
    {
        return $this->person;
    }

    /**
     * @param AnimeCharactersDataItemVoiceActorsItemPerson $person
     *
     * @return self
     */
    public function setPerson(AnimeCharactersDataItemVoiceActorsItemPerson $person): self
    {
        $this->person = $person;

        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $language
     *
     * @return self
     */
    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }
}

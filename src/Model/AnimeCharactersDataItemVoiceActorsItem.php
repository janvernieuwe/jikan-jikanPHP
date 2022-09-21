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

    public function getPerson(): AnimeCharactersDataItemVoiceActorsItemPerson
    {
        return $this->person;
    }

    public function setPerson(AnimeCharactersDataItemVoiceActorsItemPerson $animeCharactersDataItemVoiceActorsItemPerson): self
    {
        $this->person = $animeCharactersDataItemVoiceActorsItemPerson;

        return $this;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }
}

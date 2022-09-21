<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeThemes
{
    /**
     * @var AnimeThemesData
     */
    protected $data;

    public function getData(): AnimeThemesData
    {
        return $this->data;
    }

    public function setData(AnimeThemesData $animeThemesData): self
    {
        $this->data = $animeThemesData;

        return $this;
    }
}

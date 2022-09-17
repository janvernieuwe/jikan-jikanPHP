<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeThemes
{
    /**
     * @var AnimeThemesData
     */
    protected $data;

    /**
     * @return AnimeThemesData
     */
    public function getData(): AnimeThemesData
    {
        return $this->data;
    }

    /**
     * @param AnimeThemesData $data
     *
     * @return self
     */
    public function setData(AnimeThemesData $data): self
    {
        $this->data = $data;

        return $this;
    }
}

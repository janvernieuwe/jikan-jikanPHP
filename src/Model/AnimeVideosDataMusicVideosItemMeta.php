<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeVideosDataMusicVideosItemMeta
{
    /**
     * @var string|null
     */
    protected $title;

    /**
     * @var string|null
     */
    protected $author;

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(?string $author): self
    {
        $this->author = $author;

        return $this;
    }
}

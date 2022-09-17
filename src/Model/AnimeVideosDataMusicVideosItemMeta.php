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

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAuthor(): ?string
    {
        return $this->author;
    }

    /**
     * @param string|null $author
     *
     * @return self
     */
    public function setAuthor(?string $author): self
    {
        $this->author = $author;

        return $this;
    }
}

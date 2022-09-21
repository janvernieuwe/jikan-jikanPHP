<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeFullStreamingItem
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $url;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }
}

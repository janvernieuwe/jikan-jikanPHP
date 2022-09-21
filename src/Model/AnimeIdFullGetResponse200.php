<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeIdFullGetResponse200
{
    /**
     * Full anime Resource.
     *
     * @var AnimeFull
     */
    protected $data;

    /**
     * Full anime Resource.
     */
    public function getData(): AnimeFull
    {
        return $this->data;
    }

    /**
     * Full anime Resource.
     */
    public function setData(AnimeFull $animeFull): self
    {
        $this->data = $animeFull;

        return $this;
    }
}

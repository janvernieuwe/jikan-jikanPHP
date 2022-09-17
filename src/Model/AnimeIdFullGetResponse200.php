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
     *
     * @return AnimeFull
     */
    public function getData(): AnimeFull
    {
        return $this->data;
    }

    /**
     * Full anime Resource.
     *
     * @param AnimeFull $data
     *
     * @return self
     */
    public function setData(AnimeFull $data): self
    {
        $this->data = $data;

        return $this;
    }
}

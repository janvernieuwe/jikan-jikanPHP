<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class ClubsIdGetResponse200
{
    /**
     * Club Resource.
     *
     * @var Club
     */
    protected $data;

    /**
     * Club Resource.
     */
    public function getData(): Club
    {
        return $this->data;
    }

    /**
     * Club Resource.
     */
    public function setData(Club $club): self
    {
        $this->data = $club;

        return $this;
    }
}

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
     *
     * @return Club
     */
    public function getData(): Club
    {
        return $this->data;
    }

    /**
     * Club Resource.
     *
     * @param Club $data
     *
     * @return self
     */
    public function setData(Club $data): self
    {
        $this->data = $data;

        return $this;
    }
}

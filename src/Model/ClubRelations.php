<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class ClubRelations
{
    /**
     * @var ClubRelationsData
     */
    protected $data;

    /**
     * @return ClubRelationsData
     */
    public function getData(): ClubRelationsData
    {
        return $this->data;
    }

    /**
     * @param ClubRelationsData $data
     *
     * @return self
     */
    public function setData(ClubRelationsData $data): self
    {
        $this->data = $data;

        return $this;
    }
}

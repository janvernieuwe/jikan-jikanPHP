<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class ClubRelations
{
    /**
     * @var ClubRelationsData
     */
    protected $data;

    public function getData(): ClubRelationsData
    {
        return $this->data;
    }

    public function setData(ClubRelationsData $clubRelationsData): self
    {
        $this->data = $clubRelationsData;

        return $this;
    }
}

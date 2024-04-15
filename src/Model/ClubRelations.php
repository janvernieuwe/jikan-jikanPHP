<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class ClubRelations extends ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * @var ClubRelationsData
     */
    protected $data;

    public function getData(): ClubRelationsData
    {
        return $this->data;
    }

    public function setData(ClubRelationsData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}

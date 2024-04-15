<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class PersonManga extends ArrayObject
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
     * @var list<PersonMangaDataItem>
     */
    protected $data;

    /**
     * @return list<PersonMangaDataItem>
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param list<PersonMangaDataItem> $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}

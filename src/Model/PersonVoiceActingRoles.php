<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class PersonVoiceActingRoles
{
    /**
     * @var PersonVoiceActingRolesDataItem[]
     */
    protected $data = [];

    /**
     * @return PersonVoiceActingRolesDataItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param PersonVoiceActingRolesDataItem[] $data
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }
}

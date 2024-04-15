<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class PersonVoiceActingRoles extends \ArrayObject
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
     * @var list<PersonVoiceActingRolesDataItem>
     */
    protected $data;

    /**
     * @return list<PersonVoiceActingRolesDataItem>
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param list<PersonVoiceActingRolesDataItem> $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}

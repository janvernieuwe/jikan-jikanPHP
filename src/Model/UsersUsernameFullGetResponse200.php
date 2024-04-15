<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UsersUsernameFullGetResponse200 extends \ArrayObject
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
     * Transform the resource into an array.
     *
     * @var UserProfileFull
     */
    protected $data;

    /**
     * Transform the resource into an array.
     */
    public function getData(): UserProfileFull
    {
        return $this->data;
    }

    /**
     * Transform the resource into an array.
     */
    public function setData(UserProfileFull $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}

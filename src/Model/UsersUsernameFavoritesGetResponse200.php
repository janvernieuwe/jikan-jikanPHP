<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class UsersUsernameFavoritesGetResponse200 extends ArrayObject
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
     * @var UserFavorites
     */
    protected $data;

    public function getData(): UserFavorites
    {
        return $this->data;
    }

    public function setData(UserFavorites $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}

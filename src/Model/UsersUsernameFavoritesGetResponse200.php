<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UsersUsernameFavoritesGetResponse200
{
    /**
     * @var UserFavorites
     */
    protected $data;

    public function getData(): UserFavorites
    {
        return $this->data;
    }

    public function setData(UserFavorites $userFavorites): self
    {
        $this->data = $userFavorites;

        return $this;
    }
}

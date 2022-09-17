<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UsersUsernameFavoritesGetResponse200
{
    /**
     * @var UserFavorites
     */
    protected $data;

    /**
     * @return UserFavorites
     */
    public function getData(): UserFavorites
    {
        return $this->data;
    }

    /**
     * @param UserFavorites $data
     *
     * @return self
     */
    public function setData(UserFavorites $data): self
    {
        $this->data = $data;

        return $this;
    }
}

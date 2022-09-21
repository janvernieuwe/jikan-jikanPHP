<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class ClubStaffDataItem
{
    /**
     * User URL.
     *
     * @var string
     */
    protected $url;

    /**
     * User's username.
     *
     * @var string
     */
    protected $username;

    /**
     * User URL.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * User URL.
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * User's username.
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * User's username.
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }
}

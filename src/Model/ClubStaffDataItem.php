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
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * User URL.
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * User's username.
     *
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * User's username.
     *
     * @param string $username
     *
     * @return self
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }
}

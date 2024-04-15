<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class ClubMemberDataItem extends \ArrayObject
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
     * User's username.
     *
     * @var string
     */
    protected $username;

    /**
     * User URL.
     *
     * @var string
     */
    protected $url;

    /**
     * @var UserImages
     */
    protected $images;

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
        $this->initialized['username'] = true;
        $this->username = $username;

        return $this;
    }

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
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }

    public function getImages(): UserImages
    {
        return $this->images;
    }

    public function setImages(UserImages $images): self
    {
        $this->initialized['images'] = true;
        $this->images = $images;

        return $this;
    }
}

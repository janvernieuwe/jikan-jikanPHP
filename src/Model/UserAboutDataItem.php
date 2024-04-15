<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class UserAboutDataItem extends \ArrayObject
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
     * User About. NOTE: About information is customizable by users through BBCode on MyAnimeList. This means users can add multimedia content, different text sizes, etc. Due to this freeform, Jikan returns parsed HTML. Validate on your end!
     *
     * @var string|null
     */
    protected $about;

    /**
     * User About. NOTE: About information is customizable by users through BBCode on MyAnimeList. This means users can add multimedia content, different text sizes, etc. Due to this freeform, Jikan returns parsed HTML. Validate on your end!
     */
    public function getAbout(): ?string
    {
        return $this->about;
    }

    /**
     * User About. NOTE: About information is customizable by users through BBCode on MyAnimeList. This means users can add multimedia content, different text sizes, etc. Due to this freeform, Jikan returns parsed HTML. Validate on your end!
     */
    public function setAbout(?string $about): self
    {
        $this->initialized['about'] = true;
        $this->about = $about;

        return $this;
    }
}

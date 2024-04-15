<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class Title extends ArrayObject
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
     * Title type.
     *
     * @var string
     */
    protected $type;

    /**
     * Title value.
     *
     * @var string
     */
    protected $title;

    /**
     * Title type.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Title type.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Title value.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Title value.
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }
}

<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class Daterange extends \ArrayObject
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
     * Date ISO8601.
     *
     * @var string|null
     */
    protected $from;

    /**
     * Date ISO8601.
     *
     * @var string|null
     */
    protected $to;

    /**
     * Date Prop.
     *
     * @var DaterangeProp
     */
    protected $prop;

    /**
     * Date ISO8601.
     */
    public function getFrom(): ?string
    {
        return $this->from;
    }

    /**
     * Date ISO8601.
     */
    public function setFrom(?string $from): self
    {
        $this->initialized['from'] = true;
        $this->from = $from;

        return $this;
    }

    /**
     * Date ISO8601.
     */
    public function getTo(): ?string
    {
        return $this->to;
    }

    /**
     * Date ISO8601.
     */
    public function setTo(?string $to): self
    {
        $this->initialized['to'] = true;
        $this->to = $to;

        return $this;
    }

    /**
     * Date Prop.
     */
    public function getProp(): DaterangeProp
    {
        return $this->prop;
    }

    /**
     * Date Prop.
     */
    public function setProp(DaterangeProp $prop): self
    {
        $this->initialized['prop'] = true;
        $this->prop = $prop;

        return $this;
    }
}

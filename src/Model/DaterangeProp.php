<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class DaterangeProp extends ArrayObject
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
     * Date Prop From.
     *
     * @var DaterangePropFrom
     */
    protected $from;

    /**
     * Date Prop To.
     *
     * @var DaterangePropTo
     */
    protected $to;

    /**
     * Raw parsed string.
     *
     * @var string|null
     */
    protected $string;

    /**
     * Date Prop From.
     */
    public function getFrom(): DaterangePropFrom
    {
        return $this->from;
    }

    /**
     * Date Prop From.
     */
    public function setFrom(DaterangePropFrom $from): self
    {
        $this->initialized['from'] = true;
        $this->from = $from;

        return $this;
    }

    /**
     * Date Prop To.
     */
    public function getTo(): DaterangePropTo
    {
        return $this->to;
    }

    /**
     * Date Prop To.
     */
    public function setTo(DaterangePropTo $to): self
    {
        $this->initialized['to'] = true;
        $this->to = $to;

        return $this;
    }

    /**
     * Raw parsed string.
     */
    public function getString(): ?string
    {
        return $this->string;
    }

    /**
     * Raw parsed string.
     */
    public function setString(?string $string): self
    {
        $this->initialized['string'] = true;
        $this->string = $string;

        return $this;
    }
}

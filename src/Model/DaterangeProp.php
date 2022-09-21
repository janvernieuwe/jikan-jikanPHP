<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class DaterangeProp
{
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
    public function setFrom(DaterangePropFrom $daterangePropFrom): self
    {
        $this->from = $daterangePropFrom;

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
    public function setTo(DaterangePropTo $daterangePropTo): self
    {
        $this->to = $daterangePropTo;

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
        $this->string = $string;

        return $this;
    }
}

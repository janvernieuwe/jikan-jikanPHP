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
     *
     * @return DaterangePropFrom
     */
    public function getFrom(): DaterangePropFrom
    {
        return $this->from;
    }

    /**
     * Date Prop From.
     *
     * @param DaterangePropFrom $from
     *
     * @return self
     */
    public function setFrom(DaterangePropFrom $from): self
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Date Prop To.
     *
     * @return DaterangePropTo
     */
    public function getTo(): DaterangePropTo
    {
        return $this->to;
    }

    /**
     * Date Prop To.
     *
     * @param DaterangePropTo $to
     *
     * @return self
     */
    public function setTo(DaterangePropTo $to): self
    {
        $this->to = $to;

        return $this;
    }

    /**
     * Raw parsed string.
     *
     * @return string|null
     */
    public function getString(): ?string
    {
        return $this->string;
    }

    /**
     * Raw parsed string.
     *
     * @param string|null $string
     *
     * @return self
     */
    public function setString(?string $string): self
    {
        $this->string = $string;

        return $this;
    }
}

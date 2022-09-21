<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class Daterange
{
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
    public function setProp(DaterangeProp $daterangeProp): self
    {
        $this->prop = $daterangeProp;

        return $this;
    }
}

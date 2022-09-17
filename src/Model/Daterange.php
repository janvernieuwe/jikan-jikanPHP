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
     *
     * @return string|null
     */
    public function getFrom(): ?string
    {
        return $this->from;
    }

    /**
     * Date ISO8601.
     *
     * @param string|null $from
     *
     * @return self
     */
    public function setFrom(?string $from): self
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Date ISO8601.
     *
     * @return string|null
     */
    public function getTo(): ?string
    {
        return $this->to;
    }

    /**
     * Date ISO8601.
     *
     * @param string|null $to
     *
     * @return self
     */
    public function setTo(?string $to): self
    {
        $this->to = $to;

        return $this;
    }

    /**
     * Date Prop.
     *
     * @return DaterangeProp
     */
    public function getProp(): DaterangeProp
    {
        return $this->prop;
    }

    /**
     * Date Prop.
     *
     * @param DaterangeProp $prop
     *
     * @return self
     */
    public function setProp(DaterangeProp $prop): self
    {
        $this->prop = $prop;

        return $this;
    }
}

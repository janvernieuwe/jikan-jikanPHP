<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class AnimeReviewReactions extends \ArrayObject
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
     * Overall reaction count.
     *
     * @var int
     */
    protected $overall;

    /**
     * Nice reaction count.
     *
     * @var int
     */
    protected $nice;

    /**
     * Love it reaction count.
     *
     * @var int
     */
    protected $loveIt;

    /**
     * Funny reaction count.
     *
     * @var int
     */
    protected $funny;

    /**
     * Confusing reaction count.
     *
     * @var int
     */
    protected $confusing;

    /**
     * Informative reaction count.
     *
     * @var int
     */
    protected $informative;

    /**
     * Well written reaction count.
     *
     * @var int
     */
    protected $wellWritten;

    /**
     * Creative reaction count.
     *
     * @var int
     */
    protected $creative;

    /**
     * Overall reaction count.
     */
    public function getOverall(): int
    {
        return $this->overall;
    }

    /**
     * Overall reaction count.
     */
    public function setOverall(int $overall): self
    {
        $this->initialized['overall'] = true;
        $this->overall = $overall;

        return $this;
    }

    /**
     * Nice reaction count.
     */
    public function getNice(): int
    {
        return $this->nice;
    }

    /**
     * Nice reaction count.
     */
    public function setNice(int $nice): self
    {
        $this->initialized['nice'] = true;
        $this->nice = $nice;

        return $this;
    }

    /**
     * Love it reaction count.
     */
    public function getLoveIt(): int
    {
        return $this->loveIt;
    }

    /**
     * Love it reaction count.
     */
    public function setLoveIt(int $loveIt): self
    {
        $this->initialized['loveIt'] = true;
        $this->loveIt = $loveIt;

        return $this;
    }

    /**
     * Funny reaction count.
     */
    public function getFunny(): int
    {
        return $this->funny;
    }

    /**
     * Funny reaction count.
     */
    public function setFunny(int $funny): self
    {
        $this->initialized['funny'] = true;
        $this->funny = $funny;

        return $this;
    }

    /**
     * Confusing reaction count.
     */
    public function getConfusing(): int
    {
        return $this->confusing;
    }

    /**
     * Confusing reaction count.
     */
    public function setConfusing(int $confusing): self
    {
        $this->initialized['confusing'] = true;
        $this->confusing = $confusing;

        return $this;
    }

    /**
     * Informative reaction count.
     */
    public function getInformative(): int
    {
        return $this->informative;
    }

    /**
     * Informative reaction count.
     */
    public function setInformative(int $informative): self
    {
        $this->initialized['informative'] = true;
        $this->informative = $informative;

        return $this;
    }

    /**
     * Well written reaction count.
     */
    public function getWellWritten(): int
    {
        return $this->wellWritten;
    }

    /**
     * Well written reaction count.
     */
    public function setWellWritten(int $wellWritten): self
    {
        $this->initialized['wellWritten'] = true;
        $this->wellWritten = $wellWritten;

        return $this;
    }

    /**
     * Creative reaction count.
     */
    public function getCreative(): int
    {
        return $this->creative;
    }

    /**
     * Creative reaction count.
     */
    public function setCreative(int $creative): self
    {
        $this->initialized['creative'] = true;
        $this->creative = $creative;

        return $this;
    }
}

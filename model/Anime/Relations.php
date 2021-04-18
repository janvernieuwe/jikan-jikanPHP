<?php

namespace JikanPHP\Model\Anime;

use JikanPHP\Model\Common\MalUrl;

/**
 * Class Episodes
 *
 * @package JikanPHP\Model
 */
class Relations
{
    /**
     * @var MalUrl[]
     */
    public $sequel, $prequel, $alternative_setting, $alternative_version, $side_story, $summary;

    /**
     * @var MalUrl[]
     */
    public $full_story, $parent_story, $spin_off, $adaptation, $character, $other;

    /**
     * @return MalUrl[]
     */
    public function getAlternativeSetting(): ?array
    {
        return $this->alternative_setting;
    }

    /**
     * @return MalUrl[]
     */
    public function getAlternativeVersion(): ?array
    {
        return $this->alternative_version;
    }

    /**
     * @return MalUrl[]
     */
    public function getSideStory(): ?array
    {
        return $this->side_story;
    }

    /**
     * @return MalUrl[]
     */
    public function getSummary(): ?array
    {
        return $this->summary;
    }

    /**
     * @return MalUrl[]
     */
    public function getFullStory(): ?array
    {
        return $this->full_story;
    }

    /**
     * @return MalUrl[]
     */
    public function getParentStory(): ?array
    {
        return $this->parent_story;
    }

    /**
     * @return MalUrl[]
     */
    public function getSpinOff(): ?array
    {
        return $this->spin_off;
    }

    /**
     * @return MalUrl[]
     */
    public function getCharacter(): ?array
    {
        return $this->character;
    }

    /**
     * @return MalUrl[]
     */
    public function getOther(): ?array
    {
        return $this->other;
    }

    /**
     * @return MalUrl[]
     */
    public function getSequel(): ?array
    {
        return $this->sequel;
    }

    /**
     * @return MalUrl[]
     */
    public function getPrequel(): ?array
    {
        return $this->prequel;
    }

    /**
     * @return MalUrl[]
     */
    public function getAdaptation(): ?array
    {
        return $this->adaptation;
    }
}
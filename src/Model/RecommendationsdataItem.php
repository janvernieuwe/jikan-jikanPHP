<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

use ArrayObject;
class RecommendationsdataItem extends ArrayObject
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
     * MAL IDs of recommendations is both of the MAL ID's with a `-` delimiter.
     *
     * @var string
     */
    protected $malId;

    /**
     * Array of 2 entries that are being recommended to each other.
     *
     * @var list<array<string, mixed>>
     */
    protected $entry;

    /**
     * Recommendation context provided by the user.
     *
     * @var string
     */
    protected $content;

    /**
     * User Meta By ID.
     *
     * @var UserById
     */
    protected $user;

    /**
     * MAL IDs of recommendations is both of the MAL ID's with a `-` delimiter.
     */
    public function getMalId(): string
    {
        return $this->malId;
    }

    /**
     * MAL IDs of recommendations is both of the MAL ID's with a `-` delimiter.
     */
    public function setMalId(string $malId): self
    {
        $this->initialized['malId'] = true;
        $this->malId = $malId;

        return $this;
    }

    /**
     * Array of 2 entries that are being recommended to each other.
     *
     * @return list<array<string, mixed>>
     */
    public function getEntry(): array
    {
        return $this->entry;
    }

    /**
     * Array of 2 entries that are being recommended to each other.
     *
     * @param list<array<string, mixed>> $entry
     */
    public function setEntry(array $entry): self
    {
        $this->initialized['entry'] = true;
        $this->entry = $entry;

        return $this;
    }

    /**
     * Recommendation context provided by the user.
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Recommendation context provided by the user.
     */
    public function setContent(string $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;

        return $this;
    }

    /**
     * User Meta By ID.
     */
    public function getUser(): UserById
    {
        return $this->user;
    }

    /**
     * User Meta By ID.
     */
    public function setUser(UserById $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;

        return $this;
    }
}

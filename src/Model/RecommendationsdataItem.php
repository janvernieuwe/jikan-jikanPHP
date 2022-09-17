<?php declare(strict_types=1);

namespace Jikan\JikanPHP\Model;

class RecommendationsdataItem
{
    /**
     * MAL IDs of recommendations is both of the MAL ID's with a `-` delimiter.
     *
     * @var string
     */
    protected $malId;
    /**
     * Array of 2 entries that are being recommended to each other.
     *
     * @var mixed[]
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
     *
     * @return string
     */
    public function getMalId(): string
    {
        return $this->malId;
    }

    /**
     * MAL IDs of recommendations is both of the MAL ID's with a `-` delimiter.
     *
     * @param string $malId
     *
     * @return self
     */
    public function setMalId(string $malId): self
    {
        $this->malId = $malId;

        return $this;
    }

    /**
     * Array of 2 entries that are being recommended to each other.
     *
     * @return mixed[]
     */
    public function getEntry(): array
    {
        return $this->entry;
    }

    /**
     * Array of 2 entries that are being recommended to each other.
     *
     * @param mixed[] $entry
     *
     * @return self
     */
    public function setEntry(array $entry): self
    {
        $this->entry = $entry;

        return $this;
    }

    /**
     * Recommendation context provided by the user.
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Recommendation context provided by the user.
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * User Meta By ID.
     *
     * @return UserById
     */
    public function getUser(): UserById
    {
        return $this->user;
    }

    /**
     * User Meta By ID.
     *
     * @param UserById $user
     *
     * @return self
     */
    public function setUser(UserById $user): self
    {
        $this->user = $user;

        return $this;
    }
}

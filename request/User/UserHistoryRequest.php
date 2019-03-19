<?php

namespace JikanPHP\Request\User;

use JikanPHP\Helper\Constants;
use JikanPHP\Request\RequestInterface;

/**
 * Class UserHistoryRequest
 *
 * @package JikanPHP\Request
 */
class UserHistoryRequest implements RequestInterface
{

    /**
     * @var string
     */
    private $username;

    /**
     * @var string|null
     */
    private $type;

    /**
     * UserHistoryRequest constructor.
     *
     * @param string $username
     * @param null   $type
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(string $username, $type = '') // "" means empty string so get all history anime+manga
    {
        $this->username = $username;

        if (null !== $type) {
            if (!\in_array($type, ['anime', 'manga'])) {
                throw new \InvalidArgumentException(sprintf('Type %s is not valid', $type));
            }

            $this->type = $type;
        }
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return sprintf(Constants::BASE_URL.'/user/%s/history/%s', $this->username, $this->type);
    }
}

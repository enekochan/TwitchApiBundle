<?php declare(strict_types = 1);

namespace SimplyStream\TwitchApiBundle\Helix\EventSub\Entity\Events;

class UserAuthorizationRevokeEvent extends AbstractEvent
{
    use HasUser;

    /**
     * @var string
     */
    protected $clientId;

    /**
     * @return string
     */
    public function getClientId(): string
    {
        return $this->clientId;
    }

    /**
     * @param string $clientId
     *
     * @return UserAuthorizationRevokeEvent
     */
    public function setClientId(string $clientId): UserAuthorizationRevokeEvent
    {
        $this->clientId = $clientId;

        return $this;
    }
}
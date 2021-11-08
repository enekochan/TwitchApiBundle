<?php declare(strict_types = 1);

namespace SimplyStream\TwitchApiBundle\Helix\EventSub\Entity\Events;

class HypeTrainProgressEvent extends HypeTrainBeginEvent
{
    /**
     * @var int
     */
    protected $level;

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @param int $level
     *
     * @return $this
     */
    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }
}

<?php

namespace App\Object;

class X implements Player
{
    /** @var */
    private $position;

    /**
     * X constructor.
     * @param $position
     */
    public function __construct($position)
    {
        $this->position = $position;
    }

    public function getPosition(): int
    {
        return $this->position;
    }
}

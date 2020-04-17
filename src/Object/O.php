<?php

namespace App\Object;

class O implements Player
{
    /** @var  */
    private $position;

    /**
     * O constructor.
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

<?php

namespace App\Object;

class Game
{
    /** @var Player  */
    public $player;

    public function __construct(Player $player)
    {
        $this->player = $player;
    }
}

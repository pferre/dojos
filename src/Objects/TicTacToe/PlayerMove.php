<?php

namespace App\Objects\TicTacToe;

class PlayerMove
{
    /** @var string  */
    public $position;
    /** @var Player  */
    public $player;

    public function __construct(string $position, Player $player)
    {
        $this->position = $position;
        $this->player = $player;
    }
}

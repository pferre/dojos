<?php

namespace App\TicTacToe;

class PlayerMove
{
    /**
     * @var string
     */
    private $position;
    /**
     * @var Player
     */
    private $player;

    /**
     * PlayerMove constructor.
     * @param string $position
     * @param Player $player
     */
    public function __construct(string $position, Player $player)
    {
        $this->position = $position;
        $this->player = $player;
    }

    public function position(): string
    {
        return $this->position;
    }

    public function player(): Player
    {
        return $this->player;
    }
}

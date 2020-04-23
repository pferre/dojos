<?php

namespace App;

use App\Objects\TicTacToe\BoardGame;
use App\Objects\TicTacToe\O;
use App\Objects\TicTacToe\Player;
use App\Objects\TicTacToe\X;

class TicTacToeGame
{
    /** @var BoardGame */
    private $boardGame;
    /** @var Player */
    private $player;

    public function __construct(BoardGame $boardGame)
    {
        $this->boardGame = $boardGame;
        $this->player = new X();
    }

    public function position($position, $player): array
    {
        return $this->boardGame->placeMarker($player, $position);
    }

    public function nextPlayer(): Player
    {
        if ($this->player instanceof X && !$this->boardGame->isBoardEmpty()) {
            return new O();
        }

        return new X();
    }
}

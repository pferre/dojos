<?php

namespace App;

use App\Objects\TicTacToe\BoardGame;

class TicTacToeGame
{
    /** @var BoardGame */
    private $boardGame;

    public function __construct(BoardGame $boardGame)
    {
        $this->boardGame = $boardGame;
    }

    public function position($player, $position): array
    {
        return $this->boardGame->placeMarker($position, $player);
    }
}

<?php

namespace App;

use App\Objects\TicTacToe\BoardGame;
use App\Objects\TicTacToe\O;
use App\Objects\TicTacToe\Player;
use App\Objects\TicTacToe\PlayerMove;
use App\Objects\TicTacToe\X;

class TicTacToeGame
{
    /** @var BoardGame */
    private $boardGame;
    /** @var Player */
    private $currentPlayer;

    public function __construct(BoardGame $boardGame)
    {
        $this->boardGame = $boardGame;
        $this->currentPlayer = new X();
    }

    public function position(PlayerMove $playerMove): array
    {
        $this->currentPlayer = $playerMove->player;

        return $this->boardGame->placeMarker($playerMove);
    }

    public function nextPlayer(): Player
    {
        if ($this->boardGame->isBoardEmpty()) {
            return new X();
        }

        if (!$this->currentPlayer instanceof X) {
            return new X();
        }

        return new O();
    }
}

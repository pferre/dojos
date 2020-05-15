<?php

namespace App\TicTacToe;

use App\TicTacToe\Exception\IllegalPlayerMoveException;

class Game
{
    public function run(PlayerMove $move)
    {
        throw new IllegalPlayerMoveException('Illegal move');
    }
}

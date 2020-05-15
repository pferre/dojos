<?php

namespace App\TicTacToe;

use App\TicTacToe\Exception\IllegalPlayerMoveException;

class Game
{
    public function run(PlayerMove $move)
    {
        $state = [$move];

        if (!$state[0]->player() instanceof X) {
            throw new IllegalPlayerMoveException('Illegal move');
        }
    }
}

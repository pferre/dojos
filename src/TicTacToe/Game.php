<?php

namespace App\TicTacToe;

use App\TicTacToe\Exception\IllegalPlayerMoveException;

class Game
{
    /**
     * @var Board
     */
    private $board;

    public function __construct()
    {
        $this->board = new Board();
    }

    /**
     * @param PlayerMove $move
     * @return Board
     * @throws IllegalPlayerMoveException
     */
    public function run(PlayerMove $move): Board
    {
        $this->board->add($move);

        if (!$this->board->firstPlayer() instanceof X) {
            throw new IllegalPlayerMoveException('First player is not X');
        }

        return $this->board;
    }
}

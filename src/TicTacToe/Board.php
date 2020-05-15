<?php

namespace App\TicTacToe;

class Board
{
    /** @var PlayerMove[] */
    private $state;

    public function add(PlayerMove $move): void
    {
        $this->state = [$move];
    }

    public function firstPlayer(): ?Player
    {
        if (null !== $this->state) {
            return $this->state[0]->player();
        }

        return null;
    }

    public function nextPlayer(): Player
    {
        $currentPlayer = null;

        if (null !== $this->state) {
            $latestMove = array_pop($this->state);
            $currentPlayer = $latestMove->player();
        }

        if ($currentPlayer instanceof X) {
            return new O();
        }

        return new X();
    }
}

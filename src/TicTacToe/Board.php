<?php

namespace App\TicTacToe;

use App\TicTacToe\Exception\IllegalPlayerMoveException;

class Board
{
    /** @var PlayerMove[] */
    private $state;

    /**
     * @param PlayerMove $move
     * @throws IllegalPlayerMoveException
     */
    public function add(PlayerMove $move): void
    {
        if (!$this->isLegalMove($move)) {
            throw new IllegalPlayerMoveException('Move is illegal');
        }

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

    private function isLegalMove(PlayerMove $move): bool
    {
        if (null !== $this->state) {
            foreach ($this->state as $existingMove) {
                if ($existingMove->position() === $move->position()) {
                    return false;
                }
            }
        }

        return true;
    }
}

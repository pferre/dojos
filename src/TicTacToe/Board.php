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
        if (!$this->positionAlreadyTaken($move)) {
            throw new IllegalPlayerMoveException("Position {$move->position()} already taken!");
        }

        $this->state = [$move];
    }

    public function firstPlayer(): ?Player
    {
        if ($this->stateIsInitialized()) {
            return $this->state[0]->player();
        }

        return null;
    }

    public function nextPlayer(): Player
    {
        $currentPlayer = null;

        if ($this->stateIsInitialized()) {
            $latestMove = array_pop($this->state);
            $currentPlayer = $latestMove->player();
        }

        if ($currentPlayer instanceof X) {
            return new O();
        }

        return new X();
    }

    private function positionAlreadyTaken(PlayerMove $move): bool
    {
        if ($this->stateIsInitialized()) {
            foreach ($this->state as $existingMove) {
                if ($existingMove->position() === $move->position()) {
                    return false;
                }
            }
        }

        return true;
    }

    /**
     * @return bool
     */
    private function stateIsInitialized(): bool
    {
        return null !== $this->state;
    }
}

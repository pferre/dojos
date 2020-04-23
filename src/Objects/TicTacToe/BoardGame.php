<?php

namespace App\Objects\TicTacToe;

class BoardGame
{
    /** @var array */
    private $board = [];

    public function placeMarker(PlayerMove $playerMove): array
    {
        $this->board[$playerMove->position] = $playerMove->position;

        return $this->board;
    }

    public function isBoardEmpty(): bool
    {
        return empty($this->board);
    }
}

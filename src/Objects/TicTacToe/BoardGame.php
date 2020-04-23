<?php

namespace App\Objects\TicTacToe;

class BoardGame
{
    /** @var array */
    private $board = [];

    public function placeMarker(string $player, string $position): array
    {
        $this->board = [$position, $player];

        return $this->board;
    }

    public function emptyBoard(): bool
    {
        return empty($this->board);
    }
}

<?php

namespace App\Objects\TicTacToe;

class BoardGame
{
    /** @var array */
    private $board = [];

    public function placeMarker(Player $player, string $position): array
    {
        $this->board = [$position, $player];

        return $this->board;
    }

    public function isBoardEmpty(): bool
    {
        return empty($this->board);
    }
}

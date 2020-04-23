<?php

namespace App\Objects\TicTacToe;

class BoardGame
{
    public function placeMarker(string $player, string $position): array
    {
        return [$position, $player];
    }
}

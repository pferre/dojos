<?php

namespace App\TicTacToe;

class Factory
{
    public static function createO(): O
    {
        return new O;
    }

    public static function createX(): X
    {
        return new X;
    }

    public static function createMove(Player $player, string $position): PlayerMove
    {
        return new PlayerMove($position, $player);
    }
}

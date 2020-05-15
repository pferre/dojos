<?php

namespace spec\App\TicTacToe;

use App\TicTacToe\Exception\IllegalPlayerMoveException;
use App\TicTacToe\O;
use App\TicTacToe\PlayerMove;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GameSpec extends ObjectBehavior
{
    public function it_ensures_X_always_goes_first(): void
    {
        $playerO = new O;
        $firstMove = new PlayerMove('0,0', $playerO);
        $this
            ->shouldThrow(IllegalPlayerMoveException::class)
            ->duringRun($firstMove);
    }
}

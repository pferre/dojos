<?php

namespace spec\App\TicTacToe;

use App\TicTacToe\Exception\IllegalPlayerMoveException;
use App\TicTacToe\Factory;
use App\TicTacToe\O;
use App\TicTacToe\X;
use PhpSpec\ObjectBehavior;

class GameSpec extends ObjectBehavior
{
    /**
     * @throws IllegalPlayerMoveException
     */
    public function it_ensures_exception_is_thrown_if_X_is_not_first(): void
    {
        $wrongMove = Factory::createMove(new O(), '0,0');
        $this
            ->shouldThrow(IllegalPlayerMoveException::class)
            ->duringRun($wrongMove);

        $correctMove = Factory::createMove(new X(), '0,0');
        $this->run($correctMove);
    }
}

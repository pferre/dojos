<?php

namespace spec\App\TicTacToe;

use App\TicTacToe\Exception\IllegalPlayerMoveException;
use App\TicTacToe\O;
use App\TicTacToe\Player;
use App\TicTacToe\PlayerMove;
use App\TicTacToe\X;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GameSpec extends ObjectBehavior
{
    /**
     * @throws IllegalPlayerMoveException
     */
    public function it_ensures_X_always_goes_first(): void
    {
        $wrongMove = $this->createMove($this->createO(), '0,0');
        $this
            ->shouldThrow(IllegalPlayerMoveException::class)
            ->duringRun($wrongMove);

        $correctMove = $this->createMove($this->createX(), '0,0');
        $this->run($correctMove);
    }

    private function createO(): O
    {
        return new O;
    }

    private function createX(): X
    {
        return new X;
    }

    private function createMove(Player $player, string $position): PlayerMove
    {
        return new PlayerMove($position, $player);
    }
}

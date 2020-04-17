<?php

namespace spec\App;

use App\Object\O;
use App\Object\X;
use App\Object\Game;
use App\TicTacToe;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TicTacToeSpec extends ObjectBehavior
{
    public function it_makes_sure_x_always_goes_first(): void
    {
        $o = new O(1);
        $gameSequence = [new Game($o)];
        $this->plays($gameSequence)->shouldReturn('X always goes first');
        $x = new X(2);
        $gameSequence = [new Game($x)];
        $this->plays($gameSequence)->shouldReturn('');
    }

    public function it_makes_sure_players_alternate(): void
    {
        $gameSequence = [new Game(new X(1)), new Game(new X(2))];
        $this->plays($gameSequence)->shouldReturn('Players should alternate');
        $gameSequence = [new Game(new X(1)), new Game(new O(2)), new Game(new O(3))];
        $this->plays($gameSequence)->shouldReturn('Players should alternate');
        $gameSequence = [new Game(new X(1)), new Game(new O(2))];
        $this->plays($gameSequence)->shouldReturn('');
    }

    public function it_makes_sure_players_do_not_play_on_same_positions(): void
    {
        $x1 = new X(2);
        $o1 = new O(2);
        $game1 = new Game($x1);
        $game2 = new Game($o1);
        $gameSequence = [$game1, $game2];
        $this->plays($gameSequence)->shouldReturn('Players should play on same positions');
    }
}

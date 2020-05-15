<?php

namespace spec\App\TicTacToe;

use App\TicTacToe\Factory;
use App\TicTacToe\O;
use App\TicTacToe\X;
use PhpSpec\ObjectBehavior;

class BoardSpec extends ObjectBehavior
{
    public function it_makes_sure_first_player_on_board_is_X(): void
    {
        $playerMove = Factory::createMove(Factory::createX(), '0,0');
        $this->add($playerMove);

        $this->firstPlayer()->shouldBeAnInstanceOf(X::class);
    }

    public function it_ensures_players_alternate(): void
    {
        $firstMove = Factory::createMove(Factory::createX(), '0,0');
        $this->add($firstMove);
        $this->nextPlayer()->shouldBeAnInstanceOf(O::class);

        $secondMove = Factory::createMove(Factory::createO(), '0,1');
        $this->add($secondMove);
        $this->nextPlayer()->shouldBeAnInstanceOf(X::class);
    }
}

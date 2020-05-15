<?php

namespace spec\App\TicTacToe;

use App\TicTacToe\O;
use App\TicTacToe\PlayerMove;
use App\TicTacToe\X;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BoardSpec extends ObjectBehavior
{
    public function it_makes_sure_first_player_on_board_is_X(): void
    {
        $x = new X();
        $playerMove = new PlayerMove('0,0', $x);
        $this->add($playerMove);

        $this->firstPlayer()->shouldBe($x);
    }

    public function it_ensures_players_alternate(): void
    {
        $x = new X();
        $o = new O();
        $firstMove = new PlayerMove('0,0', $x);
        $this->add($firstMove);
        $this->nextPlayer()->shouldBeLike($o);

        $secondMove = new PlayerMove('0,1', $o);
        $this->add($secondMove);
        $this->nextPlayer()->shouldBeLike($x);
    }
}

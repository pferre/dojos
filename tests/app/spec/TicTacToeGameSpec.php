<?php

namespace spec\App;

use App\Objects\TicTacToe\BoardGame;
use App\Objects\TicTacToe\PlayerMove;
use App\Objects\TicTacToe\O;
use App\Objects\TicTacToe\X;
use PhpSpec\ObjectBehavior;

class TicTacToeGameSpec extends ObjectBehavior
{
    public function let(BoardGame $boardGame): void
    {
        $this->beConstructedWith($boardGame);
    }

    public function it_allows_first_player_X_to_mark_any_position(BoardGame $boardGame): void
    {
        $x = new X();
        $playerMove = new PlayerMove('0,2', $x);
        $boardGame->isBoardEmpty()->willReturn(false);
        $boardGame->placeMarker($x, '0,2')->willReturn(['0,2' => $x]);

        $expected = ['0,2' => $x];

        $this->position($playerMove)->shouldBeEqualTo($expected);
    }

    public function it_makes_sure_O_goes_after_X(BoardGame $boardGame): void
    {
        $expectedPlayer = new O();
        $x = new X();
        $playerMove = new PlayerMove('0,2', $x);
        $boardGame->isBoardEmpty()->willReturn(false);
        $boardGame->placeMarker($x, '0,2')->willReturn(['0,2' => $x]);

        $this->position($playerMove);
        $this->nextPlayer()->shouldBeLike($expectedPlayer);
    }

    public function it_makes_sure_X_always_plays_first(BoardGame $boardGame): void
    {
        $boardGame->isBoardEmpty()->willReturn(true);
        $this->nextPlayer()->shouldBeAnInstanceOf(X::class);
    }
}

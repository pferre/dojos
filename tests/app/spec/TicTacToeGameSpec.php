<?php

namespace spec\App;

use App\TicTacToeGame;
use App\Objects\TicTacToe\BoardGame;
use PhpSpec\ObjectBehavior;

class TicTacToeGameSpec extends ObjectBehavior
{
    public function it_allows_first_player_X_to_mark_position(): void
    {
        $boardGame = new BoardGame();
        $this->beConstructedWith($boardGame);

        $expected = $boardGame->placeMarker('X', '0,2');
        $this->position('X', '0,2')->shouldBeEqualTo($expected);
    }
}

<?php

namespace spec\App;

use PhpSpec\ObjectBehavior;

class BooleanCalculatorSpec extends ObjectBehavior
{
    public function it_supports_single_values(): void
    {
        $this->calculates('TRUE')->shouldReturn(true);
        $this->calculates('FALSE')->shouldReturn(false);
    }

    public function it_supports_the_not_operator(): void
    {
        $this->calculates('NOT TRUE')->shouldReturn(false);
    }

    public function it_supports_the_and_operator(): void
    {
        $this->calculates('TRUE AND FALSE')->shouldReturn(false);
        $this->calculates('TRUE AND TRUE')->shouldReturn(true);
    }

    public function it_supports_the_or_operator(): void
    {
        $this->calculates('TRUE OR FALSE')->shouldReturn(true);
        $this->calculates('FALSE OR FALSE')->shouldReturn(false);
    }

    public function it_supports_combination_of_and_or_with_precedence(): void
    {
        $this->calculates('TRUE OR TRUE OR TRUE AND FALSE')->shouldReturn(true);
        $this->calculates('TRUE OR FALSE AND NOT FALSE')->shouldReturn(true);
    }

    public function it_supports_parentheses(): void
    {
        $this->calculates('(TRUE OR TRUE OR TRUE) AND FALSE')->shouldReturn(false);
        $this->calculates('NOT (TRUE AND TRUE)')->shouldReturn(false);
        $this->calculates('(TRUE OR TRUE) AND TRUE')->shouldReturn(true);
    }
}

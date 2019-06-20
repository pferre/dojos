<?php

namespace spec\App;

use PhpSpec\ObjectBehavior;

class FizzBuzzSpec extends ObjectBehavior
{
    function it_returns_string_one_for_integer_one()
    {
        $this->execute(1)->shouldReturn("1");
    }

    function it_returns_string_two_for_integer_two()
    {
        $this->execute(2)->shouldReturn("2");
    }

    function it_returns_string_four_for_integer_four()
    {
        $this->execute(4)->shouldReturn("4");
    }

    function it_returns_fizz_for_integer_three()
    {
        $this->execute(3)->shouldReturn("Fizz");
    }

    function it_returns_buzz_for_integer_five()
    {
        $this->execute(5)->shouldReturn("Buzz");
    }

    function it_returns_fizz_buzz_for_both_multiples_of_three_and_five()
    {
        $this->execute(15)->shouldReturn("FizzBuzz");
    }

    function it_returns_an_error_for_number_greater_than_hundred()
    {
        $this->shouldThrow(\InvalidArgumentException::class)->during('execute', [101, 102]);
    }
}

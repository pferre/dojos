<?php

namespace spec\App;

use PhpSpec\ObjectBehavior;

class FizzBuzzSpec extends ObjectBehavior
{
    public function it_returns_string_one_for_integer_one(): void
    {
        $this->execute(1)->shouldReturn('1');
    }

    public function it_returns_string_two_for_integer_two(): void
    {
        $this->execute(2)->shouldReturn('2');
    }

    public function it_returns_string_four_for_integer_four(): void
    {
        $this->execute(4)->shouldReturn('4');
    }

    public function it_returns_fizz_for_integer_three(): void
    {
        $this->execute(3)->shouldReturn('Fizz');
    }

    public function it_returns_buzz_for_integer_five(): void
    {
        $this->execute(5)->shouldReturn('Buzz');
    }

    public function it_returns_fizz_buzz_for_both_multiples_of_three_and_five(): void
    {
        $this->execute(15)->shouldReturn('FizzBuzz');
    }

    public function it_returns_an_error_for_number_greater_than_hundred(): void
    {
        $this->shouldThrow(\InvalidArgumentException::class)->during('execute', [101, 102]);
    }
}

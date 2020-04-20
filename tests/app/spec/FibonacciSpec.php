<?php

namespace spec\App;

use App\Fibonacci;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FibonacciSpec extends ObjectBehavior
{
    public function it_returns_0_when_position_is_1(): void
    {
        $this->fib(1)->shouldReturn(0);
    }

    public function it_returns_1_when_position_is_2(): void
    {
        $this->fib(2)->shouldReturn(1);
    }

    public function it_returns_1_when_position_is_3(): void
    {
        $this->fib(3)->shouldReturn(1);
    }

    public function it_returns_2_when_position_is_4(): void
    {
        $this->fib(4)->shouldReturn(2);
    }

    public function it_returns_3_when_position_is_5(): void
    {
        $this->fib(5)->shouldReturn(3);
    }

    public function it_returns_34_when_position_is_10(): void
    {
        $this->fib(10)->shouldReturn(34);
    }
}

<?php

namespace spec\App;

use App\Fibonacci;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FibonacciSpec extends ObjectBehavior
{
    function it_returns_0_when_position_is_1()
    {
        $this->fib(1)->shouldReturn(0);
    }

    function it_returns_1_when_position_is_2()
    {
        $this->fib(2)->shouldReturn(1);
    }

    function it_returns_1_when_position_is_3()
    {
        $this->fib(3)->shouldReturn(1);
    }

    function it_returns_2_when_position_is_4()
    {
        $this->fib(4)->shouldReturn(2);
    }

    function it_returns_3_when_position_is_5()
    {
        $this->fib(5)->shouldReturn(3);
    }

    function it_returns_34_when_position_is_10()
    {
        $this->fib(10)->shouldReturn(34);
    }
}

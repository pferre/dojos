<?php

namespace spec\App;

use App\PrimeFactors;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PrimeFactorsSpec extends ObjectBehavior
{
    public function it_returns_prime_factors_for_2(): void
    {
        $this::of(2)->shouldReturn([2]);
    }

    public function it_returns_prime_factors_for_3(): void
    {
        $this::of(3)->shouldReturn([3]);
    }

    public function it_returns_prime_factors_for_4(): void
    {
        $this::of(4)->shouldReturn([2,2]);
    }

    public function it_returns_prime_factors_for_5(): void
    {
        $this::of(5)->shouldReturn([5]);
    }

    public function it_returns_prime_factors_for_6(): void
    {
        $this::of(6)->shouldReturn([2,3]);
    }

    public function it_returns_prime_factors_for_8(): void
    {
        $this::of(8)->shouldReturn([2,2,2]);
    }

    public function it_returns_prime_factors_for_32(): void
    {
        $this::of(32)->shouldReturn([2,2,2,2,2]);
    }
}

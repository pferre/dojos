<?php

namespace spec\App;

use PhpSpec\ObjectBehavior;

class LeapYearSpec extends ObjectBehavior
{
    public function it_confirms_year_four_is_a_leap_year(): void
    {
        $this->isLeap(4)->shouldReturn(true);
    }

    public function it_confirms_year_five_is_not_a_leap_year(): void
    {
        $this->isLeap(5)->shouldReturn(false);
    }

    public function it_confirms_year_seven_is_not_a_leap_year(): void
    {
        $this->isLeap(7)->shouldReturn(false);
    }

    public function it_confirms_year_1001_is_not_a_leap_year(): void
    {
        $this->isLeap(101)->shouldReturn(false);
    }

    public function it_confirms_a_leap_year_covers_extra_cases(): void
    {
        $this->isLeap(1700)->shouldReturn(false);
        $this->isLeap(1800)->shouldReturn(false);
        $this->isLeap(1900)->shouldReturn(false);
        $this->isLeap(1600)->shouldReturn(true);
        $this->isLeap(2000)->shouldReturn(true);
        $this->isLeap(2400)->shouldReturn(true);
    }
}

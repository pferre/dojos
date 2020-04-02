<?php

namespace spec\App;

use PhpSpec\ObjectBehavior;

class RomanNumeralSpec extends ObjectBehavior
{
    public function it_cannot_generate_roman_numeral_for_0(): void
    {
        $this
            ->shouldThrow(\InvalidArgumentException::class)
            ->during('numberToRoman', [0]);
    }

    public function it_returns_I_for_1(): void
    {
        $this->numberToRoman(1)->shouldReturn('I');
    }

    public function it_returns_II_for_2(): void
    {
        $this->numberToRoman(2)->shouldReturn('II');
    }

    public function it_returns_III_for_3(): void
    {
        $this->numberToRoman(3)->shouldReturn('III');
    }

    public function it_returns_IV_for_4(): void
    {
        $this->numberToRoman(4)->shouldReturn('IV');
    }

    public function it_returns_XX_for_20(): void
    {
        $this->numberToRoman(20)->shouldReturn('XX');
    }

    public function it_returns_XXX_for_30(): void
    {
        $this->numberToRoman(30)->shouldReturn('XXX');
    }

    public function it_returns_XL_for_40(): void
    {
        $this->numberToRoman(40)->shouldReturn('XL');
    }

    public function it_returns_L_for_50(): void
    {
        $this->numberToRoman(50)->shouldReturn('L');
    }

    public function it_returns_XC_for_90(): void
    {
        $this->numberToRoman(90)->shouldReturn('XC');
    }

    public function it_returns_C_for_100(): void
    {
        $this->numberToRoman(100)->shouldReturn('C');
    }

    public function it_returns_CD_for_400(): void
    {
        $this->numberToRoman(400)->shouldReturn('CD');
    }

    public function it_returns_D_for_500(): void
    {
        $this->numberToRoman(500)->shouldReturn('D');
    }

    public function it_returns_CM_for_900(): void
    {
        $this->numberToRoman(900)->shouldReturn('CM');
    }

    public function it_returns_M_for_1000(): void
    {
        $this->numberToRoman(1000)->shouldReturn('M');
    }

    public function it_returns_DCCCXLVI_for_846(): void
    {
        $this->numberToRoman(846)->shouldReturn('DCCCXLVI');
    }

    public function it_returns_MCMXCIX_for_1999(): void
    {
        $this->numberToRoman(1999)->shouldReturn('MCMXCIX');
    }

    public function it_returns_MM_for_2000(): void
    {
        $this->numberToRoman(2000)->shouldReturn('MM');
    }

    public function it_returns_MMMCMXCIX_for_3999(): void
    {
        $this->numberToRoman(3999)->shouldReturn('MMMCMXCIX');
    }
}

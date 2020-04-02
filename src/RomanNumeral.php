<?php

namespace App;

class RomanNumeral
{
    private const NUMERALS = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'XX' => 20,
        'IXX' => 19,
        'X' => 10,
        'IX' => 9,
        'VIII' => 8,
        'V' => 5,
        'IV' => 4,
        'I' => 1,
    ];

    public function numberToRoman(int $number): string
    {
        if ($number <= 0) {
            throw new \InvalidArgumentException("Number needs to be greater than 0: {$number} provided!");
        }

        $result = '';

        foreach (static::NUMERALS as $numeral => $value) {
            for (; $number >= $value; $number -= $value) {
                $result .= $numeral;
            }
        }

        return $result;
    }
}

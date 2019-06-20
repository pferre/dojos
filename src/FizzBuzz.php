<?php

namespace App;

use InvalidArgumentException;

class FizzBuzz
{
    /**
     * @param int $number
     * @return string
     */
    public function execute(int $number): string
    {
        if (100 < $number) {
            throw new InvalidArgumentException("{$number} is greater than 100");
        }

        if (3===$number) {
            return "Fizz";
        } elseif (5===$number) {
            return "Buzz";
        } elseif (0===$number % 3 || 0===$number % 5) {
            return "FizzBuzz";
        }

        return $number;
    }
}

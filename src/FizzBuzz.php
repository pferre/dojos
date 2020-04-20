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

        switch ($number) {
            case $number === 3:
                return 'Fizz';
            case $number === 5:
                return 'Buzz';
            case $number % 5 === 0:
            case $number % 3 === 0:
                return 'FizzBuzz';
            default:
                return (string)$number;
        }
    }
}

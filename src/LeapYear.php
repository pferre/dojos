<?php

namespace App;

class LeapYear
{
    public function isLeap(int $year): bool
    {
        if ($this->isDivisibleByFour($year) && $this->isNotDivisibleByHundred($year)) {
            return true;
        }

        if ($this->isDivisibleByFour($year) && $this->isDivisibleByHundred($year) && $this->isDivisibleByFourHundred($year)) {
            return true;
        }

        return false;
    }

    /**
     * @param int $year
     * @return bool
     */
    private function isDivisibleByFour(int $year): bool
    {
        return 0===$year % 4;
    }

    /**
     * @param int $year
     * @return bool
     */
    private function isDivisibleByHundred(int $year): bool
    {
        return 0===$year % 100;
    }

    /**
     * @param int $year
     * @return bool
     */
    private function isDivisibleByFourHundred(int $year): bool
    {
        return 0===$year % 400;
    }

    /**
     * @param int $year
     * @return bool
     */
    private function isNotDivisibleByHundred(int $year): bool
    {
        return 0!==$year % 100;
    }
}

<?php

namespace App;

class Fibonacci
{
    /**
     * @param int $position
     * @return int
     */
    public function fib(int $position): int
    {
        if (1===$position) {
            return 0;
        }

        if (2===$position) {
            return 1;
        }

        return $this->fib($position-1) + $this->fib($position-2);
    }
}

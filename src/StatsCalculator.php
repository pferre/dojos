<?php

namespace App;

class StatsCalculator
{
    /**
     * @param array $set
     * @return int
     */
    public function calculateMinimum(array $set): int
    {
        return min($set);
    }

    /**
     * @param array $set
     * @return int
     */
    public function calculateMaximum(array $set): int
    {
        return max($set);
    }

    /**
     * @param array $set
     * @return int
     */
    public function countElements(array $set): int
    {
        return count($set);
    }

    public function calculateAverage(array $set): float
    {
        return round(array_sum($set) / count($set), 2);
    }
}

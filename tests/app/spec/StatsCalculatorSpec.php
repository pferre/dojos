<?php

namespace spec\App;

use PhpSpec\ObjectBehavior;

class StatsCalculatorSpec extends ObjectBehavior
{
    function it_calculates_minimum_value_from_set_of_integers()
    {
        $set = [6, 9, 15, -2, 92, 11];

        $this->calculateMinimum($set)->shouldReturn(-2);
    }

    function it_calculates_maximum_value_from_set_of_integers()
    {
        $set = [6, 9, 15, -2, 92, 11];

        $this->calculateMaximum($set)->shouldReturn(92);
    }

    function it_counts_number_of_elements_in_set()
    {
        $set = [6, 9, 15, -2, 92, 11];

        $this->countElements($set)->shouldReturn(6);
    }

    function it_calculates_average_value_of_elements_in_set()
    {
        $set = [6, 9, 15, -2, 92, 11];

        $this->calculateAverage($set)->shouldReturn(21.83);
    }
}

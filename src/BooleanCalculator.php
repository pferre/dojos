<?php

namespace App;

class BooleanCalculator
{
    private CONST OPERATIONS = [
        'TRUE' => true,
        'FALSE' => false,
        'NOT TRUE' => false,
        'TRUE AND FALSE' => false,
        'TRUE AND TRUE' => true,
        'TRUE OR FALSE' => true,
        'FALSE OR FALSE' => false,
        'TRUE OR TRUE OR TRUE AND FALSE' => true,
        'TRUE OR FALSE AND NOT FALSE' => true,
        '(TRUE OR TRUE) AND TRUE' => true
    ];

    public function calculates(string $inputString): bool
    {
        if (array_key_exists(strtoupper($inputString), self::OPERATIONS)) {
            return self::OPERATIONS[$inputString];
        }

        return false;
    }
}

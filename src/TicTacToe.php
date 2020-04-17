<?php

namespace App;

use App\Object\Game;
use App\Object\X;

class TicTacToe
{
    /**
     * @param Game[] $sequence
     * @return string
     */
    public function plays(array $sequence): string
    {
        $result = '';

        if (!$sequence[0]->player instanceof X) {
            $result = 'X always goes first';
        }

        if (count($sequence) > 1) {
            $board = [];

            foreach ($sequence as $item => $value) {
                $board[] = $value->player->getPosition();
            }

            for ($i = 0; $i < count($sequence) - 1; $i++) {
                if ($sequence[$i]->player instanceof $sequence[$i + 1]->player) {
                    $result = 'Players should alternate';
                }
            }

            $dupes = [];
            foreach (array_count_values($board) as $val => $c) {
                if ($c > 1) {
                    $dupes[] = $val;
                }

                if (count($dupes) > 0) {
                    $result = 'Players should play on same positions';
                }
            }
        }

        return $result;
    }
}

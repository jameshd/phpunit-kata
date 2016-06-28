<?php

namespace Kata;

class RomanNumeralConverter
{
    public function convert($number)
    {
        if ($this->isValidNumber($number)) {
            return false;
        }

        if ($number <= 3) {
            return str_repeat('I', $number);
        }

        if ($number == 4) {
            return 'IV';
        }

        if ($number >= 5 && $number <= 8) {
            return $this->showNumeralNTimes('V', $number - 5);
        }

        if ($number == 9) {
            return 'IX';
        }

        if ($number >= 10 && $number <= 20) {
            return $this->showNumeralNTimes('X', $number - 10);
        }
    }

    private function isValidNumber($number)
    {
        return $number <= 0 || $number > 3000;
    }

    private function showNumeralNTimes($numeral, $times)
    {
        return $numeral . str_repeat('I', $times);
    }
}

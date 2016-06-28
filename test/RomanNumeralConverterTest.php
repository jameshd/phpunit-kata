<?php

namespace Kata\Test;

use Kata\RomanNumeralConverter;

class RomanNumeralConverterTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->converter = new RomanNumeralConverter;
    }

    public function testItCannotAcceptNegativeNumbers()
    {
        $this->assertFalse($this->converter->convert(-1));
    }

    public function testItCannotAcceptZero()
    {
        $this->assertFalse($this->converter->convert(0));
    }

    public function testItCannotAcceptMoreThan3000()
    {
        $this->assertFalse($this->converter->convert(3001));
    }

    /**
     * @dataProvider numeralsProvider
     */
    public function testItConvertsToCorrectNumeral($number, $expectedNumeral)
    {
        $this->assertEquals($expectedNumeral, $this->converter->convert($number));
    }

    public function numeralsProvider()
    {
        return [
            '1 => I' => [1, 'I'],
            '2 => II' => [2, 'II'],
            '3 => III' => [3, 'III'],
            '4 => IV' => [4, 'IV'],
            '5 => V' => [5, 'V'],
            '6 => VI' => [6, 'VI'],
            '7 => VII' => [7, 'VII'],
            '8 => VIII' => [8, 'VIII'],
            '9 => IX' => [9, 'IX'],
            '10 => X' => [10, 'X'],
            '11 => XI' => [11, 'XI'],
            '12 => XII' => [12, 'XII'],
            //'40 => XL' => [40, 'XL'],
        ];
    }
}

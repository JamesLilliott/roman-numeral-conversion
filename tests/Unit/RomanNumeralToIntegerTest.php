<?php

namespace Tests\Unit;

use App\Http\Services\RomanNumeralToInteger;
use Tests\TestCase;

class RomanNumeralToIntegerTest extends TestCase
{
    /**
     * Roman numeral to integer conversion test
     */
    public function testConversion()
    {
        foreach ($this->testData() as $romanNumeral => $expected) {
            $integerConverter = new RomanNumeralToInteger();

            $integer = $integerConverter->convert($romanNumeral);

            $this->assertEquals($expected, $integer);
        }
    }

    /**
     * @return int[]
     */
    private function testData()
    {
        return [
            // Standard number tests
            'I' => 1,
            'IV' => 4,
            'V' => 5,
            'IX' => 9,
            'X' => 10,
            'XL' => 40,
            'L' => 50,
            'XC' => 90,
            'C' => 100,
            'CD' => 400,
            'D' => 500,
            'CM' => 900,
            'M' => 1000,
            'I̅V̅' => 4000,
            'V̅' => 5000,
            'I̅X̅' => 9000,
            'X̅'=> 10000,
            'X̅L̅' => 40000,
            'L̅'=> 50000,
            'X̅C̅' => 90000,
            'C̅' => 100000,

            // Complex number tests
            'I̅V̅DCCLXV' => 4765,
            'X̅X̅X̅I̅V̅CCXXXIV' => 34234,
            'X̅C̅I̅V̅DCCXXXII' => 94732
        ];
    }
}

<?php

namespace Tests\Unit;

use App\Http\Services\IntegerToRomanNumeral;
use Tests\TestCase;

/**
 * Class IntegerToRomanNumeralTest
 *
 * @package Tests\Unit
 */
class IntegerToRomanNumeralTest extends TestCase
{
    /**
     * Integer to roman numeral conversion test
     */
    public function testConversion()
    {
        foreach ($this->testData() as $integer => $expected) {
            $romanNumeralConverter = new IntegerToRomanNumeral();

            $romanNumeral = $romanNumeralConverter->convert($integer);

            $this->assertEquals($expected, $romanNumeral);
        }
    }

    /**
     * A set of test data for converting an integer to a roman numeral
     */
    private function testData()
    {
        return [
            // Standard number tests
            1 => 'I',
            4 => 'IV',
            5 => 'V',
            9 => 'IX',
            10 => 'X',
            40 =>'XL',
            50 => 'L',
            90 => 'XC',
            100 => 'C',
            400 => 'CD',
            500 => 'D',
            900 => 'CM',
            1000 => 'M',
            4000 => 'I̅V̅',
            5000 => 'V̅',
            9000 => 'I̅X̅',
            10000 =>'X̅',
            40000 => 'X̅L̅',
            50000 => 'L̅',
            90000 => 'X̅C̅',
            100000 => 'C̅',

            // Complex number tests
            4765 => 'I̅V̅DCCLXV',
            34234 => 'X̅X̅X̅I̅V̅CCXXXIV',
            94732 => 'X̅C̅I̅V̅DCCXXXII',
        ];
    }
}

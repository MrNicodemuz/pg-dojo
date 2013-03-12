<?php

namespace Dojo\Tests;

use Dojo\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{

    public function setup()
    {
        $this->calculator = new Calculator();
    }

    public function testDisplaysZeroWhenEnteringZero()
    {
        // Act
        $this->calculator->enter('0');

        // Assert
        $expected = '0';
        $actual = $this->calculator->display();
        $this->assertEquals($expected, $actual);
    }

    /**
     * @dataProvider dataProvider
     */
    public function testAddMethod($number1, $number2, $expected)
    {
        $this->calculator->add($number1, $number2);
        $this->assertEquals($expected, $this->calculator->display());
    }

    public function dataProvider()
    {
        return array(
            array('1', '1', '2'),
            array('2', '1', '3'),
            array('2222222222222222', '1', '2222222222222223')
        );
    }
}

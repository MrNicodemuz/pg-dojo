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
	
	public function testAddOneAndOneEqualsTwo()
	{
		$this->calculator->add('1','1');
		$this->assertEquals('2', $this->calculator->display());
	}
	
	public function testAddTwoAndOneEqualsThree()
	{
		$this->calculator->add('2','1');
		$this->assertEquals('3', $this->calculator->display());
	}
	
	public function testAddVeryBigNumberAndOneEqualsVeryBigNumberPlusOne()
	{
		$this->calculator->add('2222222222222222','1');
		$this->assertEquals('2222222222222223', $this->calculator->display());
	}
}

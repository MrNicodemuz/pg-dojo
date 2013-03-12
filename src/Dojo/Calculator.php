<?php

namespace Dojo;

class Calculator
{
	private $result;
	
	public function enter($input) {
		$this->result = $input;
	}
	
	public function display() {
		return $this->result;
	}
	
	public function add($number1, $number2) {
		$this->result = $number1 + $number2;
	}
}

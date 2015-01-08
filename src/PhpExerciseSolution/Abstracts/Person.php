<?php

/**
 * Abstract Class Person
 * @package PhpExerciseSolution\Abstracts
 */

abstract class Person implements CharacterInterface {
	
	public $_age;
	public $_strength;

	public function __construct($name, $age, $strength) {
		$this->_age = $age;
		$this->_strength = $strength;
	}
	
	public function presentHimself() {
		static $count = 0;
		$count++;
		if (isset($this->_name)) {
			echo 'Character #'.$count.': '.$this->_name.' is a knight.';
		}
		echo ' He is '.$this->_age.' years old. He has '.$this->_strength.' strength.'."\n";
	}

}
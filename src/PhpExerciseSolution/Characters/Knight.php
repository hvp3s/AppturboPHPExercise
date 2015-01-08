<?php  

class Knight extends Person implements CharacterInterface {
	
	public $_name;
	
	public function __construct($name, $age, $strength) {
		$this->_name = ucfirst($name);
		$this->_age = $age;
		$this->_strength = $strength;
		$this->presentHimself();
	}
	
	public function presentHimself() {
		parent::presentHimself();
	}
}
	

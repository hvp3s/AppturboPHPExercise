<?php

class Story {
	
	private $_introductionText;
	private $_characters;
	
	public function __construct($introduction) {
		$this->_introductionText = $introduction;
	}
	
	public function setCharacters(array $characters) {
		$this->_characters = $characters;
	}
	 
	public function tellTheStory() {
		$this->_characters = array_filter($this->_characters);
		if (empty($this->_characters)) {
			return 'This story cannot be told without characters';
		} else {
			return $this->_introductionText;
		}
		
	}
}

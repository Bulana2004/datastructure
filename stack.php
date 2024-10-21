<?php


class Stack {
	private $_size;
	private $_stack = [];


	public function __construct($size) {
		$this->_size = $size;
	}


	public function push($n) {
		if (count($this->_stack) >= $this->_size) {
			return false;
		}
		$this->_stack[] = $n;
		return true;
	}


	public function pop() {
		return array_pop($this->_stack);
	}


	public function top() {
		/**
 			:TODO implement this method
		*/
	}
}


/**
* example usage
*/
$s1 = new Stack(20);

// push values 1-20
for ($i = 1; $i <= 20; ++$i) {
	$s1->push($i);
}

// pop all values
while (($val = $s1->pop()) != null) {
	echo $val . "\n";
}
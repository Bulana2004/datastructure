<?php


class Stack {
	private $_size;
	private $_stack = [];


	public function __construct($size) {
		$this->_size = $size;
	}

	// Show the Array
	function array_show(){
		print_r($this->_stack);
	}

	// Show array as a string
	function arrayShowAsString(){
		echo "\n" . implode("," , $this->_stack);
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
		// Check if stack is empty
		if(empty($this->_stack)){
            return null; // Return null for empty stack
        }

		// Return the last element (top) of the stack without removing it
        return end($this->_stack);
	}

	function search($value){
		// Check $value in the array
		if(in_array($value , $this->_stack)){
			echo "\nFound :" . $value . "\n";
		}else{
			echo "\nCan't Found array\n";
		}
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
// while (($val = $s1->pop()) != null) {
// 	echo $val . "\n";
// }

// Get the (top) last element in the array (_stack)
echo "Top value in array :" . $s1->top();

// Search the Item in a array
// $s1->search();

// Show as a array
// $s1->array_show();

// Array show as string
// $s1->arrayShowAsString();
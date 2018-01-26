<?php

	$number1 = 100;
	$number2 = 500;
	
	function addNumbers() {
		global $number1;
		global $number2;
		echo $number1 + $number2;
	}

	addNumbers();

	/*
	$number1 and $number2 were in the global scope, so they could not be accessed by the function, either giving the parameters as input or define global variables will solve the problem.
	*/
?>
<?php
	$name = "George";
	$age = 50;
	$male = TRUE;
	$list = [1,2,5,8,9];
	
	$variables = array($name, $age, $male, $list);

	for ($i = 0 ; $i < count($variables) ; $i++) {
		$variableType = gettype($variables[$i]);
		echo 'Value is ' . $variableType . '<br>';
	}
?>
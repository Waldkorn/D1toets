<?php
	$temperature = 10;
	
	function checkTemperature($input) {
		if ($input <= 50) {
			echo 'Temperature is low';
		} elseif ($input > 50) {
			echo 'Temperature is OK';
		}
	}

	checkTemperature($temperature);

?>
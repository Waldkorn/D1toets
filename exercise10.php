<?PHP

	echo '<table border=1>';

	for ($i = 1 ; $i < 6 ; $i++) {
		echo '<tr>';
		for ($j = 1 ; $j < 6 ; $j++) {
			$value = $i * $j;
			echo '<td style=padding:10>' . $value . '</td>';
		}
		echo '</tr>';
	}

	echo '</table>';

?>
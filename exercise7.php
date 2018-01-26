<?PHP

$string = 'the quick brown fox jumps over the lazy dog.';

function replaceTheWithThat($input) {

	$position = strpos(strtolower($input) , 'the');

	 $answer = substr($input , 0, $position) . substr($input, $position + 3);
	 $answer = substr_replace($answer, "that", $position, 0);
	 $answer = ucfirst ($answer);

	 echo $answer;
}

replaceTheWithThat($string);

?>
<html>

<head>
</head>

<body>

	<form method="post">
		Width: <input type="integer" name="width">
		Height: <input type="integer" name="height">
		<input type="submit" name="submit" value="Submit">  
	</form>

<?PHP

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$width = $_POST["width"];
		$height = $_POST["height"];
		$area = $width * $height;
		echo "The calculated area of width " . $width . " and height " . $height . " is: " . $area;

	}
	

?>

</body>

</html>
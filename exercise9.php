<?PHP

$cities = array("New York City", "Seoul", "Tokyo", "Mexico City", "Shanghai", "Lagos", "Cairo", "Buenos Aires", "London", "Mumbai");
$secondCities = array("Calcutta", "Los Angeles", "Osaka", "Beijing");

sort($cities);

for ($i = 0 ; $i < count($cities) ; $i++) {
	echo $cities[$i] . ', ';
}

echo '<br>';

$bothLists = array_merge($cities, $secondCities);
sort($bothLists);

for ($i = 0 ; $i < count($bothLists) ; $i++) {
	echo $bothLists[$i] . ', ';
}
?>
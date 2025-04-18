<?php


$beers = ["Modelo", "Corona", "Heineken"];
$beers2 = ["Modelo2", "Corona2", "Heineken2"];

$array_mixed = array_merge($beers, $beers2);
print_r($array_mixed);

array_push($beers, "Kermeliten");
$beer = array_pop($beers);

echo count($beers) . "<br/>";

print_r($beers);


echo "<br/>" . $beer . "<br/>";

if (in_array("Corona", $beers)) {
  echo "existe" . "<br/>";
}
?>
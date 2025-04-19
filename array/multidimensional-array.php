<?php

$names = ["Daniel", "Carlos", "Oliver", "Issac"];

$beers = [
  [
    "name" => "Corona",
    "alcohol" => 8.5,
    "country" => "México"
  ],
  [
    "name" => "Modelo",
    "alcohol" => 12,
    "country" => "México"
  ]
];

// echo $beers[1]["name"];

foreach ($beers as $beer) {
  foreach ($beer as $key => $value) {
    echo $key . " - " . $value . "<br />";
  }
}
?>
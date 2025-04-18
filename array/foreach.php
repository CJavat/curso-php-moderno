<?php

$names = ["Daniel", "Carlos", "Oliver", "Issac"];

$beer = [
  "name" => "Corona",
  "alcohol" => 8.5,
  "country" => "México"
];

foreach ($beer as $k => $v) {
  echo $k . " - " . $v . "; ";
}

?>
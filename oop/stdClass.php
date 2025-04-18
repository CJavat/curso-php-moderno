<?php

$beer = new stdClass();
$beer->name = "Modelo Negra";
$beer->alcohol = 8.5;

// print_r($beer);

$arr = (array) $beer;

// print_r($arr);

echo $arr["name"];
?>
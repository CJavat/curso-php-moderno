<?php

$beer = new Beer("Modelo Negra", "Modelo", 12.5, true);
$json = json_encode($beer);

$json_beer = '{
  "name": "Modelo Negra",
  "brand": "Modelo",
  "alcohol": 12.5,
  "isStrong": true
}';

$obj_beer = json_decode($json_beer, false);

print_r($obj_beer);

class Beer
{
  public string $name;
  public string $brand;
  public float $alcohol;
  public bool $isStrong;

  public function __construct(string $name, string $brand, $alcohol, bool $isStrong)
  {
    $this->name = $name;
    $this->brand = $brand;
    $this->alcohol = $alcohol;
    $this->isStrong = $isStrong;
  }
}

?>
<?php

class Car
{
  private string $model;
  private string $brand;
  private int $year;

  public function __construct(string $model, string $brand, int $year)
  {
    $this->model = $model;
    $this->brand = $brand;
    $this->year = $year;
  }

  public function __tostring(): string
  {//! Se va a ejecutar cuando estemos mostrando un objeto o algo cuando en realidad debería ser un String.
    return "El modelo del caro es $this->model de la marca $this->brand año $this->year";
  }
}

$car = new Car("HRV", "Honda", 2024);
echo $car;

?>
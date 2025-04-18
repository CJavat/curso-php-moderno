<?php
class Animal
{
  public string $name;
  public int $age;
  public string $color;

  public function __sleep()
  {//! Se dispara cuando se ejecuta el método serialize();
    return ["name", "color"];
  }

  public function __wakeup()
  {//! Se dispara cuando se ejecuta el método unserialize();
    echo "Se deserializó el objeto";
    $this->age = 0;
  }


}

$duck = new Animal();
$duck->name = "pato";
$duck->age = 2;
$duck->color = "rojo";

$s = serialize($duck);
$obj = unserialize($s);

echo $s . "<br />";
print_r($obj);


?>
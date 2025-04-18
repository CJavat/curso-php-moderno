<?php

$person = new Person();
$person->name = "Juan";
echo $person->country;
$person->address = "calle tal";



class Person
{
  public int $id;
  public string $name;
  public array $data = [];

  public function __get($name)
  { //! Se ejecuta solo cuando no existe la propiedad
    echo "No existe $name en el objeto <br />";
    return $this->data[$name];
  }

  public function __set($name, $value)
  { //! Se ejecuta solo cuando no existe la propiedad
    echo "No puedes agregar $value a $name <br />";
    $this->data[$name] = $value;
  }
}

?>
<?php
// $array1 = [1, 2, 3];
// $array2 = $array1;
// $array2[] = 10;

// print_r($array1);
// print_r($array2);

class Some
{
  public string $name;

  public function __clone()
  {
    $this->name = strtoupper($this->name);
  }
}

function change(Some $some)
{
  $some->name = "Ya no tiene algo, se ha cambiado su valor";
}

$some = new Some();
$some->name = "Algo";
$some2 = $some;
change($some);
// echo $some2->name . "<br/>";
// echo $some->name . "<br/>";

$new_some = clone $some;
// $new_some->name = "Lo cambió el clonardor <br />";
echo $some->name . "<br />";
echo $new_some->name . "<br />";
?>
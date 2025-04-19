<?php
$a = 1;
unset($a); //! Elimina la variable.

//! Comprueba si la variable existe.
// if (isset($a)) {
//   echo "existe";
// } else {
//   echo "No existe";
// }

$wine = new Wine();
if (isset($wine->name)) {
  echo "existe <br />";
} else {
  echo "No existe <br />";
}

unset($wine->style);

class Wine
{
  public function __isset($name)
  {//! Se ejecuta cuando isset() te da false.
    echo "Se comprueba existenia de $name <br />";
  }

  public function __unset($name)
  {//! Se ejecuta cuando unset() te da false | O sea no se puede eliminar la propiedad.
    echo "Se intentó eliminar la propiedad $name <br />";
  }
}

?>
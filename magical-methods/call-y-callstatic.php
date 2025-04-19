<?php

$engine = new Engine("log.txt");
$engine->error("Un error ocurrió");
$engine->log("El usuario ha hecho lo siguiente");
// $engine->run("name", "some", true);

Engine::some();


class Engine
{
  private $fileName;
  public function __construct($fileName)
  {
    $this->fileName = $fileName;
  }

  public function __call($name, $args)
  {//! Se ejecuta cuando el método no existe.
    // echo "Llamando al método '$name' "
    //   . "con los argumentos: " . implode(", ", $args) . "\n";

    $message = $name . ": ";
    $message .= $args[0] . " - ";
    $message .= "[" . date("Y-m-d H:i:s") . "]\n";

    if (!file_exists($this->fileName)) {
      file_put_contents($this->fileName, "");
    }

    file_put_contents($this->fileName, $message, FILE_APPEND);
  }

  public static function __callStatic($name, $args)
  {//! Se ejecuta al acceder de forma estática y no exista el método.
    echo "Llamando al método '$name' "
      . "con los argumentos: " . implode(", ", $args) . "\n";
  }
}

?>
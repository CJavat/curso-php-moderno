<?php

class Add
{
  public function __invoke($a, $b)
  {
    return $a * $b;
  }
}

class Validator
{
  private $min;
  private $max;

  public function __construct($min, $max)
  {
    $this->min = $min;
    $this->max = $max;
  }

  public function __invoke($text)
  {
    $long = strlen($text);

    if ($long < $this->min || $long > $this->max) {
      return "false";
    }

    return "true";
  }
}

$add = new Add();

// echo $add(2, 4);

$val = new Validator(1, 20);

echo $val("1212");

?>
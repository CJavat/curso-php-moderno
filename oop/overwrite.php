<?php

class Discount
{
  protected $discount = 0;

  public function __construct($discount)
  {
    $this->discount = $discount;
  }

  public function get_discount($price)
  {
    echo "Se aplica el descuento <br />";
    return $price * $this->discount;
  }

}

class SpecialDiscount extends Discount
{
  const SPECIAL_DISCOUNT = 2;

  public function get_discount($price)
  {//! A esto se le llama POLIMORFISMO. - Porque se sobreescribe el método del padre.
    echo "Se aplica un descuento especial <br />";
    return $price * $this->discount * self::SPECIAL_DISCOUNT;
  }
}

$discount = new SpecialDiscount(0.1);
$discountAmount = $discount->get_discount(100);
echo $discountAmount;


?>
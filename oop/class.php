<?php
declare(strict_types=1);

$sale = new Sale(10.5, date("Y-m-d"));
$concept = new Concept("cerveza", 10);
$sale->add_concept($concept);
// print_r($sale->concepts);

$online_sale = new OnlineSale(25, date("Y-m-d"), "tarjeta");
echo $online_sale->createInvoice();
echo $online_sale->show_info();
// $sale = new Sale(10.5, date("Y-m-d"));
// echo Sale::$count . "<br/>";
// Sale::reset();
// $sale = new Sale(10.5, date("Y-m-d"));
// echo Sale::$count . "<br/>";

// echo gettype($sale);
// print_r($sale);
// echo $sale->createInvoice();

class Sale
{
  public float $total;
  public $date;
  public static $count;
  public array $concepts;

  public function __construct(float $total, string $date)
  {
    $this->total = $total;
    $this->date = $date;
    $this->concepts = [];
    self::$count++;
  }

  public function __destruct()
  {
    echo "Se ha eliminado el objeto <br/>";
  }

  public function createInvoice(): string
  {
    // echo "Se crea la factura <br/>";
    return "Se crea la factura <br/>";
  }

  public static function reset()
  {
    self::$count = 0;
  }

  public function add_concept(Concept $concept)
  {
    $this->concepts[] = $concept;
  }
}

class Concept
{
  public string $description;
  public int|float $amount;

  public function __construct(string $description, int|float $amount)
  {
    $this->description = $description;
    $this->amount = $amount;
  }
}

class OnlineSale extends Sale
{
  public $payment_method;
  public function __construct(float $total, string $date, string $payment_method)
  {
    parent::__construct($total, $date);
    $this->payment_method = $payment_method;
  }

  public function show_info(): string
  {
    return "La venta tiene un monto de: $this->total" . "<br />";
  }
}
?>
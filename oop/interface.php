<?php

interface SendInterface
{
  public function send(string $message);

}

interface SaveInterface
{
  public function save();

}

class Document implements SendInterface, SaveInterface
{
  public function send(string $message)
  {
    echo "Se envía la venta";
  }

  public function save()
  {
    echo "Se guarda en un DB.";
  }
}

class BeerRepository implements SaveInterface
{
  public function save()
  {
    echo "Se guarda en una DB.";
  }
}

class SaveProcess
{
  private SaveInterface $saveManager;

  public function __construct(SaveInterface $saveManager)
  {
    $this->saveManager = $saveManager;
  }

  public function keep()
  {
    echo "Hacemos algo antes <br />";
    $this->saveManager->save();
  }
}

$beerRepository = new BeerRepository();
$document = new Document();
$saveProcess = new SaveProcess($document);
$saveProcess->keep();

?>
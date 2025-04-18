<?php

interface GetInfo
{
  public function get_info(): string;
}


class Address implements GetInfo
{
  protected $address;

  public function __construct(string $address)
  {
    $this->address = $address;
  }

  public function get_info(): string
  {
    return $this->address;
  }
}

class WebSite implements GetInfo
{
  protected $url;

  public function __construct(string $url)
  {
    $this->url = $url;
  }

  public function get_info(): string
  {
    return file_get_contents($this->url);
  }
}

function print_info(GetInfo $site): void
{
  echo $site->get_info();
}

$address = new Address("Privada Hidalgo");
$webSite = new WebSite("https://hdeleon.net");
print_info($webSite);

?>
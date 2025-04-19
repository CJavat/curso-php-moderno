<?php

class User
{
  private $name;
  private $email;
  private $password;

  public function __construct($name, $email, $password)
  {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  public function __serialize()
  {
    return [
      "name" => strtoupper($this->name),
      "email" => $this->email,
    ];
  }

  public function __unserialize(array $data)
  {
    $this->name = $data["name"];
    $this->email = $data["email"];
    $this->password = null;
  }
}

$user = new User("Pedro", "cdpm98@hotmail.com", "123456");

$s = serialize($user);

echo $s . "<br />";

$obj = unserialize($s);
print_r($obj);
?>
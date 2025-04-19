<?php
// ! Liskov Substitution Principle - Principio De Sustitución De Liskov.

interface ISendProject
{
  public function send();
}

class Project
{
  public function create()
  {
    echo "Se ha creado el proyecto";
  }
}

class SalesProject extends Project implements ISendProject
{
  //? Aquí más funcionamiento.
  public function send()
  {
    echo "Se envía el proyecto";
  }
}

class InternalProject extends Project
{
  public function send()
  {
    throw new Exception("Los proyectos internos no se envían");
  }
}

function send(ISendProject $project)
{
  $project->send();
}

send(new Project());
send(new SalesProject());
?>
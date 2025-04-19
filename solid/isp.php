<?php
// ! Interface Segregation Principle - Principio De Segregación De Interfaces.

interface CrudBaseInterface
{
  public function add();
  public function get();
  public function delete();
}

interface UpdateCrudInterface
{
  public function update();
}

interface DeleteCrudInterface
{
  public function delete();
}

class UserCrud implements CrudBaseInterface, UpdateCrudInterface, DeleteCrudInterface
{
  public function add()
  {
    echo "Se agrega";
  }
  public function get()
  {
    echo "Se obtiene";
  }
  public function update()
  {
    echo "Se actualiza";
  }
  public function delete()
  {
    echo "Se elimina";
  }
}

class SaleCrud implements CrudBaseInterface, DeleteCrudInterface
{
  public function add()
  {
    echo "Se agrega";
  }
  public function get()
  {
    echo "Se obtiene";
  }
  public function delete()
  {
    echo "Se elimina";
  }
}

function update(UpdateCrudInterface $crud)
{
  $crud->update();
}

update(new SaleCrud());


?>
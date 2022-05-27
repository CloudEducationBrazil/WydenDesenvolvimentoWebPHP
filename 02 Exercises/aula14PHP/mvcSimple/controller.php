<?php
class Controller
{
  private $view;
  private $model;

  public function __construct()
  {
    //$moduloExterno = $_GET['modulo'];
    $actionExterno = $_GET['action'];

    $this->view  = new View;
    $this->model = new $_GET['modulo']; // $moduloExterno

    $data = $this->model->$actionExterno(); //$_GET['action']();
    $this->view->load($_GET['modulo'], $_GET['action'], $data);
  }
}

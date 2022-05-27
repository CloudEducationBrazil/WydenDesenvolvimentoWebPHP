<?php

class Cliente
{
  private $dados = array(1 => 'Julia', 2 => 'Josy', 3 => 'Maria');

  public function all()
  {
    $data = $this->dados;
    return $data;
  }

  public function one()
  {
    $data['registro'] = $this->dados[$_GET['id']];
    return $data;
  }
}

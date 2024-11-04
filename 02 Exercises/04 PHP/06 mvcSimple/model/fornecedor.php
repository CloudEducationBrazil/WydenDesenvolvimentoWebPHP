<?php

class Fornecedor
{
  private $dados = array(1 => 'Paulo', 2 => 'Antidio', 3 => 'Charles');

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

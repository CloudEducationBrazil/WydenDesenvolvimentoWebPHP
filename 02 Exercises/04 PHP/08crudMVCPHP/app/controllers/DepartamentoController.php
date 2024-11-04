<?php
  require_once '../../../config/database.php';
  require_once '../../../app/models/Departamento.php';

class DepartamentoController {
    private $departamento;

    public function __construct($db) {
        $this->departamento = new Departamento($db);
    }

    public function create($nome) {
        return $this->departamento->create($nome);
    }

    public function read() {
        return $this->departamento->read();
    }

    public function readOne($id) {
        return $this->departamento->readOne($id);
    }

    public function update($id, $nome) {
        return $this->departamento->update($id, $nome);
    }

    public function delete($id) {
        return $this->departamento->delete($id);
    }
}
?>
<?php
# CRUD
# insert into deparyment (name) values ($name);
# select id, name from deparyment where $id;
# update deparyment set name = $name where id = $id;
# delete from deparyment where id = $id;

session_start();

require_once '../../conexao/connPDO.php';

$id = 0;
$name = '';
$update = false;

// Cadastro 
try {
  if (isset($_POST['save'])) {
    $id = $_POST['idDepart'];
    $department = $_POST['department'];

    $sqlStatment = "insert into coursejdbc.department (name) values ('$department')";
    if ($conn->query($sqlStatment)) {
      //echo "<br> Registro inserido...";

      $_SESSION['message']  = 'Registro cadastrado com sucesso!!!';
      $_SESSION['msg_type'] = 'success';

      header('location: cadDepart.php');
    }
    //$conn = NULL;
  }
} catch (PDOException $e) {
  die("Erro na inserção do departamento...");
  //echo .$e->getMessage();
}

// Delete
try {
  if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sqlStatment = "delete from coursejdbc.department where id = '$id'";
    if ($conn->query($sqlStatment)) {
      //echo "<br> Registro excluído com sucesso!!!";

      $_SESSION['message']  = 'Registro excluído com sucesso!!!';
      $_SESSION['msg_type'] = 'danger';

      header('location: cadDepart.php');
    }
    //$conn = NULL;
  }
} catch (PDOException $e) {
  die("Erro na exclusão do departamento...");
  //echo .$e->getMessage();
}

// Update
try {
  if (isset($_GET['update'])) {
    $id = $_GET['update'];
    $update = true;

    $sqlStatment = $conn->query("select Id, Name as Departamento from coursejdbc.department where id = '$id'");
    if ($sqlStatment->rowCount() == 1) { //count($sqlStatment)
      // https://docs.microsoft.com/pt-br/sql/connect/php/pdostatement-fetch?view=sql-server-ver16

      $row = $sqlStatment->fetch(PDO::FETCH_ASSOC);
      //echo $row['Departamento'];
      $name = $row['Departamento'];
    }
    //$conn = NULL;
  }
} catch (PDOException $e) {
  die("Erro na atualização do departamento...");
  //echo .$e->getMessage();
}

try {
  if (isset($_POST['update'])) {
    $id = $_POST['idDepart'];
    $department = $_POST['department'];

    $sqlStatment = "update coursejdbc.department set name = '$department' where id = '$id'";
    if ($conn->query($sqlStatment)) {
      //echo "<br> Registro atualizado com sucesso!!!";

      $_SESSION['message']  = 'Registro atualizado com sucesso!!!';
      $_SESSION['msg_type'] = 'warning';

      header('location: cadDepart.php');
    }
    //$conn = NULL;
  }
} catch (PDOException $e) {
  die("Erro na atualização do departamento...");
  //echo .$e->getMessage();
}

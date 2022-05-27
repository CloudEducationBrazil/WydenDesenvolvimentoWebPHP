<?php
# CRUD
# insert into deparyment (name) values ($name);
# select id, name from deparyment where $id;
# update set name = $name from deparyment where id = $id;
# delete from deparyment where id = $id;

require_once 'connPDO.php';

session_start();

$department = '';

// Cadastro 
try {
  if (isset($_POST['save'])) {
    $id = $_POST['idDepart'];
    $department = $_POST['department'];

    $sqlStatment = "insert into coursejdbc.department (name) values ('$department')";
    if ($conn->query($sqlStatment)) {
      //echo "<br> Registro inserido...";

      $_SESSION['message']  = 'Registro inserido com sucesso!!!';
      $_SESSION['msg_type'] = 'success';

      header('location: index.php');
    }
    //$conn = NULL;
  }
} catch (PDOException $e) {
  die("Erro na inserção do departamento...");
  //echo .$e->getMessage();
}

// Update
try {
  if (isset($_GET['update'])) {
    $id = $_GET['update'];

    //$sqlStatment = "update set name = '$department' from coursejdbc.department where id = '$id'";

    $sqlStatment = $conn->query('select Id, Name as Departamento from coursejdbc.department where id = "$id"');

    if (1 == 1) { //count($sqlStatment)
      //echo "<br> Registro atualizado com sucesso!!!";

      //$row = $sqlStatment->fetch();
      $row = $sqlStatment->fetch(PDO::FETCH_ASSOC);
      echo $row;
      $department = $row['Departamento'];

      $_SESSION['message']  = 'Registro atualizado com sucesso!!!';
      $_SESSION['msg_type'] = 'warning';

      //header('location: index.php');
    }
    //$conn = NULL;
  }
} catch (PDOException $e) {
  die("Erro na atualização do departamento...");
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

      header('location: index.php');
    }
    //$conn = NULL;
  }
} catch (PDOException $e) {
  die("Erro na exclusão do departamento...");
  //echo .$e->getMessage();
}

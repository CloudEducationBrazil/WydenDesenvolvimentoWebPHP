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

    $sqlStatment = "insert into vendas.department (name) values ('$department')";
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
    $id = $_GET['idDepart'];
    echo "aaaa $id";

    $department = strtoupper($_GET['department']);
    echo "AQUI ".$department;

    $sqlStatment = "update vendas.department set name = '$department' where id = $id";
    //echo $sqlStatment;
    //$sqlStatment = "select Id, Name as Departamento from vendas.department where id = '$id'";
    $result = $conn->query($sqlStatment);
    //var_dump($result);
    //$all = $result->fetchAll();
    //echo $result;

    /*
     $sqlStatment = "update set name = '$department' from vendas.department where id = '$id'";
     $prepare = $conn->prepare($sqlStatment)
     $prepape = bindValue(":id", $id, PDO::PARAM_INT);
     //$prepape = bindParam(":id", $id);
     $count = $prepape.execute();
     $result = $prepare->fetch(PDO::FECH_ASSOC);
     //print_r($result);
     echo "$count linhas afetadas";  
    */

    if ($department != "") { //count($sqlStatment)
      if ($conn->query($sqlStatment)) {
          //$department = $row['Departamento'];

        $_SESSION['message']  = 'Registro atualizado com sucesso!!!';
        $_SESSION['msg_type'] = 'warning';

        header('location: index.php');
      }
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

    $sqlStatment = "delete from vendas.department where id = $id";
    if ($conn->query($sqlStatment)) {
      //echo "<br> Registro excluído com sucesso!!!";

      $_SESSION['message']  = 'Registro excluído com sucesso!!!';
      $_SESSION['msg_type'] = 'danger';

      header('location: index.php');
      exit;
    }
    //$conn = NULL;
  }
} catch (PDOException $e) {
  die("Erro na exclusão do departamento...");
  //echo .$e->getMessage();
}

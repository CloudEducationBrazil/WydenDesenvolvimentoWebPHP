<?php
// Conectando ao banco de dados:
include_once("connPDO.php");

// Recebendo os dados a pesquisar
// $idDepartamento = $_POST['idDepartamento'];
?>

<html>

<head>
  <link href="estilos.css" rel="stylesheet" type="text/css">
  <title>Consulta de Departamento</title>
</head>

<body>
  <?php // Inserindo no BD
  try {
    $sqlStatment = "delete from department where Id = :id";
    $stmt = $conn->prepare($sqlStatment);
    $id = 56;
    //$stmt->BindParam('id', $id, PDO::PARAM_INT);
    $stmt->bindValue(':id', $id);
    if ($stmt->execute() === true) {
      echo ('Excluído com sucesso!!!');
    }
  } catch (PDOException $e) {
    die("Erro no delete no BD");
  }

  // Fecha a conexão com o BD 
  $conn = NULL;
  ?>
</body>

</html>
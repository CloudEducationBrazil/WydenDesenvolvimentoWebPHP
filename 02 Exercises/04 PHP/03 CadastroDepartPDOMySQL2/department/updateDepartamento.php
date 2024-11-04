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
  <?php // Atualizando no BD
  try {
    $sqlStatment = "update department set Name = 'Depart Social' where Id = :id";
    $stmt = $conn->prepare($sqlStatment);
    $id = 55;
    $stmt->bindValue(':id', $id);
    if ($stmt->execute() === true) {
      echo ('Alterado com sucesso!!!');
    }
  } catch (PDOException $e) {
    die("Erro na atualização no BD");
  }

  // Fecha a conexão com o BD 
  $conn = NULL;
  ?>
</body>

</html>
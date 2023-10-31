<?php
// Conectando ao banco de dados:
include_once("../../bdPHP/connPDO.php");

// Recebendo os dados a pesquisar
// $idVendedor = $_POST['idVendedor'];
?>

<html>

<head>
  <link href="estilos.css" rel="stylesheet" type="text/css">
  <title>Alterando Vendedor</title>
</head>

<body>
  <?php // Atualizando no BD
  try {
    $sqlStatment = "update tb_sellers set Name = 'Juju Alterado' where Id = :id";
    $stmt = $conn->prepare($sqlStatment);
    $id = 225;
    $stmt->bindValue(':id', $id);
    if ($stmt->execute() === true) {
      echo ('Vendedor alterado com sucesso!!!');
    }
  } catch (PDOException $e) {
    die("Erro na atualização do vendedor no BD");
  }

  // Fecha a conexão com o BD 
  $conn = NULL;
  ?>
</body>

</html>
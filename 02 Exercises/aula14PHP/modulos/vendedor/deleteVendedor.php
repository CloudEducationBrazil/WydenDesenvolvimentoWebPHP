<?php
// Conectando ao banco de dados:
include_once("../../bdPHP/connPDO.php");

// Recebendo os dados a pesquisar
// $idVendedor = $_POST['idVendedor'];
?>

<html>

<head>
  <link href="estilos.css" rel="stylesheet" type="text/css">
  <title>Excluindo Vendedor</title>
</head>

<body>
  <?php // Excluindo no BD
  try {
    $sqlStatment = "delete from tb_sellers where Id = :id";
    $stmt = $conn->prepare($sqlStatment);
    $id = 225;
    //$stmt->BindParam('id', $id, PDO::PARAM_INT);
    $stmt->bindValue(':id', $id);
    if ($stmt->execute() === true) {
      echo ('Vendedor excluído com sucesso!!!');
    }
  } catch (PDOException $e) {
    die("Erro, excluindo vendedor no BD");
  }

  // Fecha a conexão com o BD 
  $conn = NULL;
  ?>
</body>

</html>
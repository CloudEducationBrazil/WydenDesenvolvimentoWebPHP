<?php
// Conectando ao banco de dados:
include_once("../../bdPHP/connPDO.php");

// Recebendo os dados a pesquisar
$idVendedor = $_POST['idVendedor'];
$nameVendedor = $_POST['nameVendedor'];

 //echo $idVendedor;
 //echo $nameVendedor;
?>

<html>

<head>
  <link href="estilos.css" rel="stylesheet" type="text/css">
  <title>Alterar Vendedor</title>
</head>

<body>
  <?php // Atualizando no BD
  try {
    $sqlStatment = "update tb_sellers set Name = :nameVendedor where Id = :id";
    $stmt = $conn->prepare($sqlStatment);
    //$id = 224;
    $stmt->bindValue(':id', $idVendedor);
    $stmt->bindValue(':nameVendedor', $nameVendedor);
    if ($stmt->execute() === true) {
      echo ('Vendedor alterado com sucesso!!!');
    }
  } catch (PDOException $e) {
    die("Erro na atualização do vendedor no BD");
  }

  // Fecha a conexão com o BD 
  $conn = NULL;
  ?>
  <div>
      <a href=".\consultarVendedor.php">Voltar</a>
  </div>

</body>

</html>
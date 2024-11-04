<?php
 session_start();

// Conectando ao banco de dados:
include_once("../../bdPHP/connPDO.php");

// Recebendo os dados a pesquisar
$idVendedor = $_GET['idVendedor'];
//$idVendedor = $_SESSION['idVendedor'];
echo $idVendedor;
?>

<html>

<head>
  <link href="estilos.css" rel="stylesheet" type="text/css">
  <title>Excluir Vendedor</title>
</head>

<body>
  <?php // Excluindo no BD
  try {
    $sqlStatment = "delete from tb_sellers where id = :id";
    $stmt = $conn->prepare($sqlStatment);
    //$id = 225;
    //$stmt->BindParam('id', $id, PDO::PARAM_INT);
    $stmt->bindValue(':id', $idVendedor);
    if ($stmt->execute() === true) {
      echo ('Vendedor excluído com sucesso!!!');
    }
  } catch (PDOException $e) {
    die("Erro, excluindo vendedor no BD");
  }

  // Fecha a conexão com o BD 
  $conn = NULL;
  ?>
  <div>
    <a href=".\listarVendedor.php">Voltar</a>
  </div>

</body>

</html>
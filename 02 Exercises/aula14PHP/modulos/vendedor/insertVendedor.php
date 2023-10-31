<?php
// Conectando ao banco de dados:
//include_once("connPDO.php");

// Recebendo os dados a pesquisar
// $idVendedor = $_POST['idVendedor'];
?>

<html>

<head>
  <link href="estilos.css" rel="stylesheet" type="text/css">
  <title>Cadastrando Vendedor</title>
</head>

<body>
  <?php // Inserindo no BD
  try {
    // Conectando ao banco de dados:
    include_once("../../bdPHP/connPDO.php");

    //$sqlStatment = $conn->query("insert into tb_sellers (NAME) values ('Juju')");
    $sqlStatment = "insert into tb_sellers (NAME) values ('Juju Cardoso')";
    if ($conn->query($sqlStatment)) {
      echo ('Vendedor inserido com sucesso!!!');
    }
  } catch (PDOException $e) {
    die("Erro, cadastrando vendedor no BD");
  }

  // Fecha a conexão com o BD 
  $conn = NULL;
  ?>
</body>

</html>
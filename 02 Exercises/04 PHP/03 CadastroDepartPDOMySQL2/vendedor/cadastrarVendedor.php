<?php
// Conectando ao banco de dados:
include_once("../../bdPHP/connPDO.php");

// Recebendo os dados a pesquisar
$nameVendedor = $_POST['nameVendedor'];

//echo $nameVendedor.'oi2';
?>

<html>

<head>
  <link href="estilos.css" rel="stylesheet" type="text/css">
  <title>Cadastrar Vendedor</title>
</head>

<body>
  <div class="container">
    <?php // Inserindo no BD
      try {
        // Conectando ao banco de dados:
        include_once("../../bdPHP/connPDO.php");

        //$sqlStatment = $conn->query("insert into tb_sellers (NAME) values ('Juju')");
        $sqlStatment = "insert into tb_sellers (NAME) values (:nameVendedor)";
        $stmt = $conn->prepare($sqlStatment);
        $stmt->bindValue(':nameVendedor', $nameVendedor);
        //$stmt->execute();
  
        //if ($conn->query($sqlStatment)) {
        if ($stmt->execute() === true) {
          echo ('Vendedor cadastrado com sucesso!!!');
        }
      } catch (PDOException $e) {
        die("Erro, cadastrando vendedor no BD");
      }

      // Fecha a conexão com o BD 
      $conn = NULL;
      ?>
  </div>
  <div>
      <a href=".\listarVendedor.php">Voltar</a>
  </div>

</body>

</html>
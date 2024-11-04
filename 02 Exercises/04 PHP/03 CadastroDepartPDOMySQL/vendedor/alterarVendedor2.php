<?php
// Conectando ao banco de dados:
include_once("../../bdPHP/connPDO.php");

// Recebendo os dados a pesquisar
$idVendedor = $_GET['idVendedor'];
$nameVendedor = $_GET['nameVendedor'];

//echo $idVendedor;
//echo $nameVendedor;
?>

<html>

<head>
  <link href="estilos.css" rel="stylesheet" type="text/css">
  <title>Alterar Vendedor</title>
</head>

<body>
    <a href=".\listarVendedor.php">Voltar</a>
    <form method="POST" action="./alterarVendedor.php?idVendedor=<?php echo $idVendedor?>">
    <div>
        <label for="idVendedor"></label>
        <!-- value="< $_GET['cd-saida'];?>" -->
        <input type="hidden" name= "idVendedor" id= "idVendedor" value= <?php echo $idVendedor?> placeholder="Informe vendedor? " />
      </div>

      <div>
        <label for="nameVendedor">Nome Vendedor</label>
        <!-- value="< $_GET['cd-saida'];?>" -->
        <input type="text" name= "nameVendedor" id= "nameVendedor" require value= <?php echo $nameVendedor?> placeholder="Informe vendedor? " />
      </div>

      <div>
        <input type="submit" value="Gravar" />
      </div>
    </form>
</body>

</html>
<?php
 session_start();

// Conectando ao banco de dados:
include_once("../../bdPHP/connPDO.php");

// Recebendo os dados a pesquisar
if (!empty($_GET['idVendedor']))
  $idVendedor = $_GET['idVendedor'];
else
  $idVendedor = null;

//echo $idVendedor;
//$_SESSION['idVendedor'] = $idVendedor;
?>

<html>

<head>
  <link href="estilos.css" rel="stylesheet" type="text/css">
  <title>Sellers (Vendedores)</title>

  <style>
    * {
      margin:0;
      padding: 0;
      box-sizing: border-box;
    }

    .container {
      display: flex;
      flex-direction: row;
      justify-content: center;
      text-align: center;
    }

  </style>  
</head>

<body>
  <div class="container">

    <!-- Criando tabela e cabeçalho de dados: -->
    <div>
      <h1>Manutenção de Vendedores</h1>
      <a href=".\consultarVendedor.html">Voltar</a>
    </div>
    <table border="1" style='width:50%'>
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>AÇÃO</th>
      </tr>

      <!-- Preenchendo a tabela com os dados do banco: -->
      <?php

      if ($idVendedor == null) {
        $stmt = $conn->query("select ID, NAME from tb_sellers order by NAME");
      }
      else {
        $sqlStatment = "select ID, NAME from tb_sellers where id = :idVendedor";
        $stmt = $conn->prepare($sqlStatment);
        $stmt->bindValue(':idVendedor', $idVendedor);
        $stmt->execute();
      }

      // Obtendo os dados por meio de um loop while
      while ($registro = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $id   = $registro['ID'];
        $name = $registro['NAME'];

        //echo "<p>{$registro['ID']} {$registro['NAME']}</p>";
        echo "<tr>";
        echo "<td>" . $id . "</td>";
        echo "<td>" . $name . "</td>";
        echo "<td>" . "<a href=cadastrarVendedor.html>Cadastrar</a>"                . "&nbsp;&nbsp;&nbsp;". 
                      "<a href=alterarVendedor2.php?idVendedor=".$id."&nameVendedor=".$name.">Alterar</a>" . "&nbsp;&nbsp;&nbsp;". 
                      "<a href=deletarVendedor.php?idVendedor=".$id.">Excluir</a>"  . "</td>";
        echo "</tr>";
      }

      // Fecha a conexão com o BD 
      $conn = NULL;
      echo "</table>";
      ?>
  </div>
</body>

</html>
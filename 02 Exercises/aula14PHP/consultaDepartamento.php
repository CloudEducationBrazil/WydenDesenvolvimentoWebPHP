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
  <!-- Criando tabela e cabeçalho de dados: -->
  <table border="1" style='width:50%'>
    <tr>
      <th>ID</th>
      <th>NAME</th>
    </tr>

    <!-- Preenchendo a tabela com os dados do banco: -->
    <?php
    $sqlStatment = $conn->query("select ID, NAME from department");

    // Obtendo os dados por meio de um loop while
    while ($registro = $sqlStatment->fetch(PDO::FETCH_ASSOC)) {
      $id = $registro['ID'];
      $name = $registro['NAME'];

      //echo "<p>{$registro['ID']} {$registro['NAME']}</p>";
      echo "<tr>";
      echo "<td>" . $id . "</td>";
      echo "<td>" . $name . "</td>";
      echo "</tr>";
    }

    // Fecha a conexão com o BD 
    $conn = NULL;
    echo "</table>";
    ?>
</body>

</html>
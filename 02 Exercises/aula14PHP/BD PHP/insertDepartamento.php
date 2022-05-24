<?php
// Conectando ao banco de dados:
//include_once("connPDO.php");

// Recebendo os dados a pesquisar
// $idDepartamento = $_POST['idDepartamento'];
?>

<html>

<head>
  <link href="estilos.css" rel="stylesheet" type="text/css">
  <title>Consulta de Departamento</title>
</head>

<body>
  <?php // Inserindo no BD
  try {
    // Conectando ao banco de dados:
    include_once("connPDO.php");

    //$sqlStatment = $conn->query("insert into department (NAME) values ('DepProva')");
    $sqlStatment = "insert into department (NAME) values ('DepProva')";
    if ($conn->query($sqlStatment)) {
      echo ('Inserido com sucesso!!!');
    }
  } catch (PDOException $e) {
    die("Erro no insert no BD");
  }

  // Fecha a conexão com o BD 
  $conn = NULL;
  ?>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Alteração de Departamento</title>

  <link rel='stylesheet' type="text/css" href='./assets/css/bootstrap.min.css' />
  
  <!--
    <link rel="stylesheet" href="./css/bootstrap.min.css.map" />
    -->
  <style>
    * {
      margin: 0;
      box-sizing: border-box;
    }
  </style>
</head>

<!--
    div: justify-content-center; form-group; 
    div: alert alert-warning; alert alert-danger alert alert-success;
    div: row
    input: form-control
    button/input: btn btn-primary; btn btn-info 
  -->

<body>

  <?php require_once 'connPDO.php';?>

  <?php if (isset($_SESSION['message'])) { ?>
    <div class="alert alert-<?php $_SESSION['msg_type']?>  bg-primary">
      <?php
      echo $_SESSION['message'];
      unset($_SESSION['message']);
      ?>
    </div>
  <?php } ?>

  <div class="container">
    <div class="row justify-content-center">

      <?php
        $id = $_GET['id'];
        //echo $id;     

        $sqlStatment = "select Id, Name as Departamento from vendas.department where id = $id"; 
        $res = $conn->query($sqlStatment);
        $row = $res->fetch(PDO::FETCH_OBJ); //FETCH_OBJ(); 
        print_r($row);
        echo $row->Departamento;
        ?>  

    <div class='row justify-content-center'>
      <form action='process.php' method='PUT'>

        <div class='form-group'>
          <input class='form-control' type='text' hidden name='idDepart' id='idDepart' 
          value = <?php print $row->Id?>>
        </div>

        <div class='form-group'>
          <label for='department'>Departamento</label>
          <input class='form-control' type='text' name='department' id='department' 
          placeholder='Informe departamento...' value = "<?php echo $row->Departamento; ?>">
        </div>

        <div class='form-group'>
          <button text='submit' class='btn btn-primary' name='update'>Alterar</button>
        </div>
      </form>
    </div>
  </div>
  </div>

  <script src='./js/bootstrap.bundle.min.js'> </script>
  <!-- <script src="./js/bootstrap.bundle.min.js.map"></script> -->
  <script src='./jquery/jqueryu.js'></script>
</body>

</html>
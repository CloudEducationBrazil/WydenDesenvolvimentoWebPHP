<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cadastro de Departamento</title>

  <link rel='stylesheet' href='./css/bootstrap.min.css' />
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
  <?php require_once 'process.php'; ?>

  <?php if (isset($_SESSION['message'])) { ?>
    <div class="alert alert-<?php=$_SESSION['msg_type']?>  bg-primary">
      <?php
      echo $_SESSION['message'];
      unset($_SESSION['message']);
      ?>
    </div>
  <?php } ?>

  <div class="container">
    <div class="row justify-content-center">
      <table class="table">
        <tr>
          <thead>
            <th>Id</th>
            <th>Departamento</th>
            <th colspan="2">Ação</th>
          </thead>
        </tr>

        <?php
        $sqlStatment = $conn->query('select Id, Name as Departamento from coursejdbc.department');
        while ($row = $sqlStatment->fetch(PDO::FETCH_ASSOC)) {
          $id = $row['Id'];
          $department = $row['Departamento']; ?>
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $department; ?></td>
            <td><a class=" btn btn-info" href="./index.php?update=<?php echo $id; ?>">Edit</a></td>
            <td><a class="btn btn-danger" href="process.php?delete=<?php echo $id; ?>">Delete</a></td>
          </tr>
        <?php }; ?>
      </table>
    </div>

    <div class='row justify-content-center'>
      <form action='process.php' method='POST'>

        <div class='form-group'>
          <input class='form-control' type='number' hidden name='idDepart' id='idDepart' />
        </div>

        <div class='form-group'>
          <label for='department'>Departamento</label>
          <input class='form-control' type='text' value=<?php echo $department; ?> name='department' id='department' placeholder='Informe departamento...' />
        </div>

        <div class='form-group'>
          <button text='submit' class='btn btn-primary' name='save'>Cadastrar</button>
        </div>
      </form>
    </div>
  </div>

  <script src='./js/bootstrap.bundle.min.js'> </script>
  <!-- <script src="./js/bootstrap.bundle.min.js.map"></script> -->
  <script src='./jquery/jqueryu.js'></script>
</body>

</html>
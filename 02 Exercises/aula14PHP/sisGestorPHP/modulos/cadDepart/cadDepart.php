<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css" />
  <link rel="stylesheet" href="../../css/styles.css" />
</head>

<body>
  <?php require_once '\xampp\htdocs\html_css_js_php_CRUD\modulos\cadDepart\processCadDep.php'; ?>

  <?php if (isset($_SESSION['message'])) { ?>
    <div class="mensagem alert alert-<?php echo $_SESSION['msg_type']; ?>">
      <?php
      echo $_SESSION['message'];
      unset($_SESSION['message']);
      ?>
    </div>
  <?php } ?>

  <div class="container">
    <h1>Cadastro de Departamento</h1>
    <p class="menu"><a href="../../index.php">Menu Sistema</a></p>
    <div class="mt-3 row justify-content-center">
      <table class="table table-striped table-hover">
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
            <td><a class="btn btn-info" href="./cadDepart.php?update=<?php echo $id; ?>">Edit</a></td>
            <td><a class="btn btn-danger" href="./processCadDep.php?delete=<?php echo $id; ?>">Delete</a></td>
          </tr>
        <?php }; ?>
      </table>
    </div>

    <div class=' row justify-content-center'>
      <form class='row g-1 mt-1 mb-1' action='./processCadDep.php' method='POST'>

        <div class='form-group'>
          <input class='form-control' type='hidden' value="<?php echo $id; ?>" name='idDepart' id='idDepart' />
        </div>

        <p class="menu"><a href="../../index.php">Menu Sistema</a></p>
        <div class='form-group'>
          <label class="form-label" for='department'>Departamento</label>
          <input class='form-control:focus' type='text' autofocus value=" <?php echo $name; ?>" name='department' id='department' placeholder='Informe departamento...' />

          <?php
          if ($update == true) { ?>
            <button text='submit' class='btn btn-info' name='update'>Atualizar</button>
          <?php } else { ?>
            <button text='submit' class='btn btn-primary' name='save'>Cadastrar</button>
          <?php }; ?>
        </div>
      </form>
    </div>
  </div>

  <script src='./html_css_js_php_CRUD/js/bootstrap.bundle.min.js'></script>
  <script src='./html_css_js_php_CRUD/js/script.js'></script>
  <script src='./html_css_js_php_CRUD/jquery/jqueryu.js'></script>
</body>

</html>
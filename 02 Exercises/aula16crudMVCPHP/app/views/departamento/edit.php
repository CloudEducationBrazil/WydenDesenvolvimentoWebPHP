<?php
    require_once '../../../config/database.php';
    require_once '../../../app/controllers/DepartamentoController.php';

    $controller = new DepartamentoController($pdo);
    $departamento = $controller->readOne($_GET['id']);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $controller->update($_GET['id'], $_POST['nome']);
        header("Location: index.php");
    }
?>

<h1>Editar Departamento</h1>
<form method="POST">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" value="<?= $departamento['nome'] ?>" required>
    <button type="submit">Salvar</button>
</form>
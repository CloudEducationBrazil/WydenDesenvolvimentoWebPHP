<?php
    require_once '../../../config/database.php';
    require_once '../../../app/controllers/DepartamentoController.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $controller = new DepartamentoController($pdo);
        $controller->create($_POST['nome']);
        header("Location: index.php");
    }
?>

<h1>Criar Departamento</h1>
<form method="POST">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" required>
    <button type="submit">Salvar</button>
</form>
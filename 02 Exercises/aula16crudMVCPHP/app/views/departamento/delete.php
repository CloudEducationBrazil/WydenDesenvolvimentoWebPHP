<?php
    require_once '../../../config/database.php';
    require_once '../../../app/controllers/DepartamentoController.php';

    $controller = new DepartamentoController($pdo);
    $controller->delete($_GET['id']);
    header("Location: index.php");
?>
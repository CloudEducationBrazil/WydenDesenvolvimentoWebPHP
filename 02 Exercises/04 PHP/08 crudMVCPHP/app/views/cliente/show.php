<?php
    require_once '../../../config/database.php';
    require_once '../../../app/controllers/DepartamentoController.php';

    $controller = new DepartamentoController($pdo);

    // show

    header("Location: index.php");
?>
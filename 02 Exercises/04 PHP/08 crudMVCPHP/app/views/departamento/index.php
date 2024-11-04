<?php
    require_once '../../../config/database.php';
    require_once '../../../app/controllers/DepartamentoController.php';

    $controller = new DepartamentoController($pdo);
    $departamentos = $controller->read();
?>

<h1>Departamentos</h1>
<a href="create.php">Adicionar Departamento</a>
<ul>
    <?php foreach ($departamentos as $departamento): ?>
        <li>
            <?= $departamento['nome'] ?>
            <a href="edit.php?id=<?= $departamento['id'] ?>">Editar</a>
            <a href="delete.php?id=<?= $departamento['id'] ?>">Deletar</a>
            
           <!--  
            se utilizar routes comentar as duas linhas de cima e descomentar as duas 
                linhas debaixo
                <a href="/departamento/edit/<?= $departamento['id'] ?>">Editar</a>
                <a href="/departamento/delete/<?= $departamento['id'] ?>">Deletar</a>            
           -->
        </li>
    <?php endforeach; ?>
</ul>
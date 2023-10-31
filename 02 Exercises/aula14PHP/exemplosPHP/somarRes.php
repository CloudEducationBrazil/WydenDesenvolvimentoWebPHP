<?php
    $num1 = isset($_GET["x"]) ? $_GET["x"]: 0;
    $num2 = isset($_GET["y"])? $_GET["y"]: 0;

    $soma = $num1 + $num2;

    echo "<p>Resultado: </p>".$soma;
?>
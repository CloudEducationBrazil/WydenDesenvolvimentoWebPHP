<?php
$serverName = "INSPIRONHELENO\\SQLEXPRESS"; // ou o nome do seu servidor
$connectionOptions = array(
    "Database" => "clinica",
    "Uid" => "sa",
    "PWD" => "55"
);

// Estabelecendo a conexão
$conn = sqlsrv_connect($serverName, $connectionOptions);

//Limpa a tela
popen('cls','w');


if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

echo "Conexão bem-sucedida!";
//sqlsrv_close($conn);
?>
<?php
// Configurações de conexão; INSPIRONHELENO\SQLEXPRESS
$serverName = "INSPIRONHELENO\SQLEXPRESS"; // Nome do servidor
$database = "clinica"; // Nome do banco de dados
$username = "sa"; // Nome de usuário
$password = "55"; // Senha
$charset = 'utf8mb4';

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

//https://www.google.com/search?q=conectar+PHP+ao+banco+de+dados+sql+server+string+de+conex%C3%A3o+no+vscode&sca_esv=72c864a1bde62694&biw=1366&bih=599&tbm=vid&sxsrf=ADLYWIL-_MnX1jVL76vzki4nFwy-ktCsPg%3A1730313921529&ei=wX4iZ9n9H5_N1sQP4v7v6Q0&ved=0ahUKEwiZ4pHV4baJAxWfppUCHWL_O90Q4dUDCA4&uact=5&oq=conectar+PHP+ao+banco+de+dados+sql+server+string+de+conex%C3%A3o+no+vscode&gs_lp=Eg1nd3Mtd2l6LXZpZGVvIkZjb25lY3RhciBQSFAgYW8gYmFuY28gZGUgZGFkb3Mgc3FsIHNlcnZlciBzdHJpbmcgZGUgY29uZXjDo28gbm8gdnNjb2RlSM-jAVDrCli6oQFwA3gAkAEAmAGyAqAB1ymqAQgwLjMxLjEuMbgBA8gBAPgBAZgCE6AC5hTCAgQQIxgnwgIIEAAYgAQYogTCAggQABiiBBiJBcICChAhGKABGMMEGArCAgQQIRgKwgIIECEYoAEYwwSYAwCIBgGSBwYzLjE1LjGgB7qCAQ&sclient=gws-wiz-video#fpstate=ive&vld=cid:8a7cef18,vid:hD4tx7Bhddo,st:0

//Limpa a tela
popen('cls','w');

// Conexão usando PDO; driver: sqlsrv
try {
    $dsn = "sqlsrv:Server=$serverName;Database=$database";
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo "Conexão bem-sucedida! \n";
} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
}

// Fechando a conexão
// $conn = null;
?>
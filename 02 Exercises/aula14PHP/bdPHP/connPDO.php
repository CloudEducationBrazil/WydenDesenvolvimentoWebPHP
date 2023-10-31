<?php
$database = 'dbname=vendas';
$hostname = 'mysql:host=localhost:3306;' . $database;
$username = 'root';
$password = '1234';
//Hash the password as we do NOT want to store our passwords in plain text.
//$passwordHash = password_hash($password, PASSWORD_BCRYPT, array(« cost » => 12));

try {
  // Connection with PDO
  $conn = new PDO($hostname, $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");
  // $conn->exec("SET CHARACTER SET utf8");      // Sets encoding UTF-8

  //echo "Connected successfully";
} catch (PDOException $e) {
  die("Falha na Conexão com o BD MySQL!!!"); // . $e->getMessage()
}
  // echo "conectado com sucesso!!!";

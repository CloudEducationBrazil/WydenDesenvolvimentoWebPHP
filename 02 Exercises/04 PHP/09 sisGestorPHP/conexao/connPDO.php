<?php

$bd   = "dbname=coursejdbc";
$host = "mysql:host=localhost:3306" . $bd;
$user = "developer";
$pwd  = "12";

try {
  $conn = new PDO($host, $user, $pwd);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");

  //echo "Connected successfully";
} catch (PDOException $e) {
  die("Falha na Conexão com o BD MySQL!!!"); // .$e->getMessage()
}

<?php
$hostname = "localhost";
$bancodedados = "coursejdbc";
$usuario = "developer";
$senha = "12";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
$mysqli->set_charset('utf8');
// var_dump($mysqli);

try {
  //if ($mysqli == FALSE) {
  if ($mysqli->connect_errno) {
    echo "falha ao conectar no BD: (" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
  } else {
    echo "BD conectado com sucesso!!!";
  }
} catch (Exception $e) {
  echo $e->getMessage(), "\n";
}
//mysqli_close($mysqli);
<?php

$nome = $_GET["nome"];
$sexo = $_GET["sexo"];
$dtNasc = $_GET["dtNasc"];
$idade = $_GET["idade"];
$telefone = $_GET["telefone"];
$farmada = $_GET["farmada"];
$fuma = $_GET["fuma"];
$observacao = $_GET["observacao"];

echo "Nome:" . $nome . "</br>";
echo "Sexo:" .
  $sexo . "</br>";
echo "Dt Nasc:" .
  $dtNasc . "</br>";
echo "Idade:" .
  $idade . "</br>";
echo "Telefone:" .
  $telefone . "</br>";
echo "F Armada:" .
  $farmada . "</br>";

if ($fuma) {
  echo "Fuma: Sim" . "</br>";
} else {
  echo "Fuma: Não" . "</br>";
}

echo "Observação:" . $observacao;

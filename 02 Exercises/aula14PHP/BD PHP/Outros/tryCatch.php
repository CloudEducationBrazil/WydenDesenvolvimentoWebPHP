<?php
function soma($x, $y)
{
  // if ($y == 0) {
  //  }
  $resultado = $x / $y;

  throw new Exception('Não é possível realizar a soma');
  return $resultado;
};

try {
  echo soma(10, 2) . "<br/>";
  echo soma(5, 'sss0') . "<br/>";
} catch (Exception $e) {
  echo $e->getMessage(), "\n";
} finally {
  echo "<br> Finalizado.";
}

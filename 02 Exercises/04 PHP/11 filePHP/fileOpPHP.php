  $arquivo = 'testes.txt';
  
  // obtém um ponteiro para o arquivo 
  $fp = fopen($arquivo, 'r');
   
  if(!$fp){
    echo 'Não foi possível abrir o arquivo';
  }
  else{
    $conteudo = fread($fp, filesize($arquivo));
    echo $conteudo;
    fclose($fp); // fecha o ponteiro para o arquivo
  }
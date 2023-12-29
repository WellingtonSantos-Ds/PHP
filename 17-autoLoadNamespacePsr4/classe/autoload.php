<?php

spl_autoload_register(function($recebeAlto)
{
  // Pega todo o caminho da minha pasta tenho que concatenar com '/' no final para indicar a pasta;
  $baseDir = __DIR__.'/';
  echo $baseDir."<br>";

  // Estou convertendo as Barras '\\' tenho que locar dus barras porque uma o php lateraliza a aspas, para '/' do namespace de index.php e concatenando com .php;
  $file = $baseDir.str_replace('\\' , '/',$recebeAlto).'.php'; 
  echo $file."<br>";

  if(file_exists($file))
  {  
    // Chamando $file no require porque é  o resultado de todo meu caminho concatenado;
    require $file;
  }
  else
  {
    echo 'Aquivo Não encontrado';
  }
  

});
<?php
// jeito corrento com tratativa de erro:
spl_autoload_register(function($cata)
{
  if(file_exists('pegaClass/'.$cata.'.php'))
  {
    require 'pegaClass/'.$cata.'.php';
  }
  else
  {
    echo ' Arquivo Inexistente ';
  }
 
});


$m = new Matematica();
echo $m -> somar(20,20)."<ph>";
$a = new Algo();
echo $a ->somarSegunda(40,49);



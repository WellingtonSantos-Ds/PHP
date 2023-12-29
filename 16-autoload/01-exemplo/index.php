<?php
// Utilizando o autoload para chamar a class mas de um jeito incorreto:
spl_autoload_register(function($cata)
{
  require 'pegaClass/'.$cata.'.php';
});


$m = new Matematica();
$m -> somar(20,20);

$a = new Algo();
$a ->somarSegunda(40,49);



<?php
// Utilizando o autoload para chamar a class mas de um jeito incorreto:
// spl_autoload_register(function($cata)
// {
//   if(file_exists('pegaClass/'.$cata.'.php')){
//     require 'pegaClass/'.$cata.'.php';

//   }else{
//     echo 'Arquivo Não existe = '.$cata;
//   }

// });


// $m = new Matematica();
// $m -> somar(20,20);

// $a = new Algo();
// $a ->somarSegunda(40,49);

// $m = new Mas();
// $m -> somar(4,4);


$nomes = function(){
  return 'wellington';
};

echo $nomes();

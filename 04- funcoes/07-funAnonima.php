<?php

// A variavel dismo recebe uma função  anonima sem nome , qual a diferensa, é que eu posso atribuir essa variavel a outras variaves.

$dismo = function (int $valor){
   
   return $valor * 0.1;
};

$funcao = $dismo;

echo $dismo(50)."<br>";

//essa variavel vem com um valor diferente 

echo $funcao(90);
const 

// Pode passar essa função como parametro de qulquer outra função.

function somar($a,$b){ 
   // argumento
}

somar(10, function(){
  // Criando uma função para esucutar em ($b); 
});
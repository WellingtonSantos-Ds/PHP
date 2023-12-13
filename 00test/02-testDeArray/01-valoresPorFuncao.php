<?php
 //O ($arr) é um rest parameter;

function add ( ...$arr){
 
  $recebeSoma = 0;

  foreach ($arr as $valor) {
    $recebeSoma += $valor;
  }
  $somado = $recebeSoma / count($arr);
  return (int)$somado;
}
 
echo add(2,2,2,2,6,8,4,2,4,'á');  


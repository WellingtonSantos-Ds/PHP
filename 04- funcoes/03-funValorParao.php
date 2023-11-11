<?php

//colocando valor padrão nos parametros da função. qundo adicinado um valar. não presisa espesificar na função.
 
function somar($n1, $n2 = 0, $n3 = 0){
  $total = $n1 + $n2 + $n3;
  return $total;
}


$x = somar(1);
$y = somar(4,4);
$w = somar ($x,$y);

echo $w . "<br>";

//Garantido que o valor vai ser apenas de determinado tipo.

function som(int $n1, int $n2 = 0, int $n3 = 0){
  $total = $n1 + $n2 + $n3;
  return $total;
}

$c = som ('err','fre');

echo $c;


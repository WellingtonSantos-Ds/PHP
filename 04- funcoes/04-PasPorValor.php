<?php

function somar ($n1,$n2){
  $total = $n1 + $n2;
  return $total;
}
//pasagem de parametros por valor,  as variaves são quem resebe os volores e passa para o parametro.
$z=5;
$x=5;

$somando = somar($z,$x);

echo $somando;




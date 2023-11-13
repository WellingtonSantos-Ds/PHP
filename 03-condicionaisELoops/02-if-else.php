<?php

// Operador ternário:

// (Condição) ? RESULTADO POSITIVO : RESULTADO NEGATIVO;

$idade = 98;

echo ($idade < 18 ) ? 'MAIOR': 'MENOR';

// (Pode armazenar em uma variavel para verificar depois);

$var = ($idade < 18 ) ? true : false;

if($var){
  echo 'menor';
}else{
  echo'maior';
}


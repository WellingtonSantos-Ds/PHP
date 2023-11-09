<?php

//Passando variaves por refeerencia 

//Quando pasa uma variavel por referensia não pasa o valor mas sim a propria variavel. ($valores) vai virar o proprio ($total); quando a variavel é alterada dentro da funão ela tembem é alterada fora. a pasagem de valor só pode ser por variaves.

function somar ($n1,$n2,&$total){
  $total = $n1+$n2;
}

$x=6;
$y= 12;
$valores = 0; //Eu estou mandando a variavel ($valores) não o valor. quando a variavel ($total) ser auterada dentro  da funçao minha variavel ($valores) tanbem sera alterada fora da funçao.

 somar($x,$y,$valores);  

echo $valores; //voce não pega mas a variavel pasada por soma [$pega= somar($x,$y,$valores);]  mas a variavel dentro de soma,


//função nativa que funciona por referencia.
$lista = [2,5,6,7,3];


sort ($lista);

foreach ( $lista as $tudo){
  echo $tudo;
}




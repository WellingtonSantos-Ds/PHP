<?php
// Além desse tem vários outros na documentação.

// Pegando valor absoluto de um numero. Ou seja valor positivo.

$numero = -8.3;
echo abs($numero)."<br>"; 

//função pi.

echo pi()."<br>";

// Arredondamento comum 3.5 vira 4. também posso arredondar com casas decimais.
$comum = 3.4;
echo round($comum)."<br>";

//pega o (67) e arredonda para(70).
$commun = 3.56780;
echo round($commun,2)."<br>";

// Arredondamento sempre para baixo.
$aredon = 2.3;
echo floor($aredon)."<br>";

// Arredondamento sempre para cima.
$cima = 5.3;
echo ceil($cima)."<br>";

// valor aleatório  mínimo e máximo.
$aleatorio = rand(3,100);

echo $aleatorio."<br>";

// Qual o maior e menor valor na lista.

$lista = [3,4,57,8,5,9];
echo max($lista)."<br>";
echo min($lista)."<br>";
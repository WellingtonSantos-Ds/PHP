<?php

$lista =['nome','sobre','pessoa', 'isso'];

// contado quantos itens tem no meu array.
echo 'TOTAL = '.count ($lista);



$lista = ['Boniek','Pedro','Francisca','Laserda','Paula','josé'];
$aprovados = ['Pedro','Francisca','Paula','Laserda'];

// A função vai gerar um novo array de itens que estão na primeira lista e não estão na segunda lista.

// Comparando os itens da primeira lista cona o da segunda, se tiver em ($lista ) e não tiver em ($provado) quer dizer que foi reprovado,
$reprovados = array_diff($lista, $aprovados);
print_r ( $reprovados); 


$numeros = [10, 20, 24, 91,18];

 // Função que filtra algo no array. Primeiro parâmetro é o array a ser filtrado, O segundo uma callback uma função anonima. a (function($item) ) vai rebeber o próprio numero no parâmetro. retornado verdadeiro ou falso.

// Você manda o array e a função roda em cada item do array fazendo a verificação de cada item. A cada true ele mantém e a cada false ele exclui.
$filtrados = array_filter($numeros,function($item){
   if($iten < 30 ){
      return true;
   }else{
      return false;
   }
});
print_r($filtrados);


// array_map Serve para fazer alteração nos item.
$numeros = [10, 20, 24, 91,18];

// A diferença é que tenho que passar a função primeiro e depois o array. 
$dobrados = array_map(function($item){
  
   return $item * 2;

},$numeros);

print_r ($dobrados);
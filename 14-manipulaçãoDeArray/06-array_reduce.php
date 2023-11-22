<?php

// O array reduce  vai pegar o array passado no parâmetro e executar uma função em cada um dos items. ele vari o array e reduz os item em um só 
$numeros = [1, 2, 3, 4, 5];

// Guardando se inicia em 0 e vai somando e guardando os items que items está mapeando na função indo do (1 au 5); também posso falar que (guardando) pode iniciar do  (2).items a inda vai do (1 ou 5 ) mas (guardado) vai iniciar somando (2+1) não mas (0+1); EX: $total = array_reduce($numeros, 'soma', 2);
function soma ($guardando, $items){
   
   $guardando = $guardando + $items;

   return $guardando;
}

$total = array_reduce($numeros, 'soma');
// total vai ser (15);
echo 'Todos números somados = '.$total;


<?php

$array = ['a','b','c','d','e','f'];

// O array_slice faz uma cópia do array cortando as partis de acordo cam os parâmetros. Primeiro parâmetro o array. Segundo de onde vai começar. O terceiro quantos item vai pegar a partir do segundo parâmetro. Que pode ser negativo aí ele conta de traz para frente.
$retorna = array_slice($array, 0 , 3);
// vai retornar de ('a' até 'c');
print_r($retorna);


$retorna = array_slice($array, -3 , 2);
// vai retornar de ('d' até 'e');
print_r($retorna); 
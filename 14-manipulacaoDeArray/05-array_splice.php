<?php 

// O array_splice modifica o próprio array . Ele remove um item e adiciona outro no lugar.
$array = ['a','b','c','d','e','f'];
// Estou dizendo que a partir da  posição dois eu quero que remova um  item. ou seja o ('c').
array_splice($array, 2 , 1);
print_r($array);

$array = ['a','b','c','d','e','f'];
// Estou dizendo que quero remover dois item. O ('c' e 'd').
array_splice($array, 2 , 2);
print_r($array);


$array = ['a','b','c','d','e','f'];
// Estou removendo e adicionado item. removendo ('c' e 'd') e adicionado ('k') no logar deles.
array_splice($array, 2, 2, 'k');
print_r($array);


$array = ['a','b','c','d','e','f'];
// Estou removendo ('c' e 'd') e adicionado um array no lugar deles.
array_splice($array, 2, 2, [90, 10, 20]);
print_r($array);
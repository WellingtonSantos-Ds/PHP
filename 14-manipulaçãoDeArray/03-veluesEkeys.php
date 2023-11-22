<?php

$array =[
   'nome'=> '',
   'idade' => 90,
   'empresa' => 'Casa',
   'cor' => 'azul',
   'profissao' => 'fazedor de bolo'
];

// O Array_keys gera um novo array com apenas as chaves do array original, por isso tenho que colocá-lo em uma variavel.
$chaves = array_keys($array);
print_r($chaves);

// Funciona como o de sima mas com array valores.
$valores = array_values($array);
print_r($valores);



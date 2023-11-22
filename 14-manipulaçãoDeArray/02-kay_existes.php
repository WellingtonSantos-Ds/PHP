<?php

$array =[
   'nome'=> 'wellington',
   'idade' => 90,
   'empresa' => 'Casa',
   'cor' => 'azul',
   'profissao' => 'fazedor de bolo'
];

// procurado no array se tem a chave.no primeiro parâmetro eu coloco o que estou procurado e no segundo o array. função original array_key_exists, essa e uma mais curta mais funciona do mesmo jeito.
if(key_exists('idade',$array)){
   $idadeDoarray = $array['idade'];
   echo $idadeDoarray." anos";
}else{
   echo 'Não encontrado';
}
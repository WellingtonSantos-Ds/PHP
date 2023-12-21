<?php

$array =[
   'nome'=> 'wellington',
   'idade' => 90,
   'empresa' => 'Casa',
   'cor' => 'azul',
   'profissao' => 'fazedor de bolo'
];

$c = 6;
$i = 0;
do {

   $arra2[$i] = rand(1,60);
   $i++;

} while ($i < $c);

sort($arra2);
foreach($arra2 as $inten ){
   echo $inten.",";
}


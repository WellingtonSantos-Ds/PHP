<?php
$lista = [
  'nome' =>'wellington', 
  'idade' => 90, 
  'atributos' => [
    'forca' => 60, 
    'agilidade' => 80,
    'detsreza' => 50,
  ], 
  'vida' => 100,
  'mana' => 928  
];

echo ($lista > 18 ) ? ; 
echo "NOME: ".$lista['nome']."<br>";
echo "FORÇA: ".$lista['atributos']['forca']."<br>";
echo "VIDA: ".$lista['vida'];

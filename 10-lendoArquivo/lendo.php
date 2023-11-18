<?php
// file_get_contents Ler arquivo (interno através de um arquivo interno como .txt) ou (externo com uma url de um servidor) 
 $texto = file_get_contents('texto.txt');
 echo $texto;

 // Explode quebrando o texto em linha e colocando em um array; 
$texto = explode("\n", $texto);
echo 'Números De Linhas ='.count($texto);
 //LENDO
 
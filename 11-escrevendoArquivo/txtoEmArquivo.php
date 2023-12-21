<?php

// O file contents salva os arquivos no formato colocado do primeiro parâmetro. se o arquivo não existir ele vai criar, se já existir ele sobre escreve o arquivo. 
$texto =  'Escrevendo qualquer coisa';
file_put_contents('texto.txt',$texto);
echo 'salvo';

//lendo,escrevendo e salvando ,junto com outro texto.
$texto = file_get_contents('texto.txt');

$texto .= "\n outro texto";
file_put_contents('texto.txt',$texto);

echo 'salvo';

// Cw pegando texto pelo formulário.
$nome = filter_input(INPUT_GET,'name',FILTER_SANITIZE_SPECIAL_CHARS);
$texto = filter_input(INPUT_GET,'texto',FILTER_SANITIZE_SPECIAL_CHARS);
$txt = '.txt';
if($nome && $texto){
   $tudo = $nome.$txt;
   file_put_contents("$tudo",$texto);
   echo 'Salvo ';
}else{
   echo "erro";
}







<?php

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



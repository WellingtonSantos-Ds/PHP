<?php
$array = [];

function insere($no){
   global $array;
   array_push($array,$no);
}

insere(23);
insere(24);
insere(27);
insere(29);

print_r($array);


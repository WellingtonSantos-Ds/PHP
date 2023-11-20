<?php
// // Aqui eu estou pegando o arquivo do array ['arquivo'] na pasta ['tmp_name'] e salvando na menha pasta (salvandoPng);
// move_uploaded_file($_FILES['arquivo']['tmp_name'],'salvandoPng/'.$name);
// // pode ser assim também.
// //move_uploaded_file($_FILES['arquivo']['tmp_name'],'salvandoPng/'.$_FILES['arquivo']['name']);
// echo 'Salvo';

function test($x, $y) 
{
    return $x == $y ? ($x + $y)*3 : $x + $y ;
}
echo test(1, 2)."<br>";
echo test(3, 2)."\n";
echo test(2, 2)."\n";  
 

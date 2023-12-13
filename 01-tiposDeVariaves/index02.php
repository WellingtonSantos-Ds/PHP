<?php

$name = 'wellington';
$lastName = 'santos da silva';
$eage = 26;

$fullName = $name.$lastName;//concatenando variável 

$fullName = $name. ' '.$lastName;// Concatenação tripla 

$fullName = '$name $lastName';// diferença entre aspas simples e aspas duplas. O php entende aspas simples como um valor literal.  

$fullName = "$name $lastName";// Verifica se ainda tem variável para ser executada.

$phrase = "$name $lastName has $eage years";

echo $fullName;
echo $phrase;

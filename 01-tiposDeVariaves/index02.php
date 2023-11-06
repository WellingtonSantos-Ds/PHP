<?php

$name = 'wellington';
$lastName = 'santos da silva';
$eage = 26;

$fullName = $name.$lastName;//concatenando variáves 

$fullName = $name. ' '.$lastName;// Concatenação tripla 

$fullName = '$name $lastName';// diferença entere aspas sinples e aspas duplas. O php entende aspas sinples como um valor literal.  

$fullName = "$name $lastName";// Verifica se ainda tem variável para ser excutada.

$phrase = "$name $lastName has $eage years";

echo $fullName;
echo $phrase;

<?php

$word = ['GUIO = Hi ', 'GUIO = What is your name  ', 'GUIO = Why'];
$answer = ['PABLO = Hi','PABLO = Pablo but today I am Pablita','PABLO = Because I am a programmer boy'];

// Olor wellington vamos começar 

for($i=0; $i < count($word); $i++){
    echo $word[$i]."<br>";
    echo $answer[$i]."<br>"; 
}
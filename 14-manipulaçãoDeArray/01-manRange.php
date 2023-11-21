<?php

// o range é uma função que conta os item de forma sequencial ou pulado as sequencia de acordo com o terceiro parâmetro. 
$sequencia = range(1, 10);

// De ua ao cinquenta pulando de dois em dois;
$pulando = range(1, 50, 2);

// Letras do alfabeto sequencial 
$abc = range('a','z',2);

foreach($sequencia as $item){
   echo $item."<br>";
}
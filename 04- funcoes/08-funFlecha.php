<?php

// função errow function é uma Função anônima simplificada em uma expressão., mas só funciona para retorno de um unico valor 

$dismo = fn( int $valor)  => $valor * 0.1;
echo $dismo(200)."<br>";

$somar = fn(int $a, int $b) => $a + $b;
echo $somar (23,20);
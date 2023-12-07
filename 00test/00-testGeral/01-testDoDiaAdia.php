<?php

function somar($a, $b)
{
    return $a + $b;
}
fn (fsd) => s; 
// Chamando a função somar com dois números
$resultado1 = somar(2, 2);
echo $resultado1; // Saída: 4

// Usando uma função anônima como segundo argumento para a função somar
$resultado2 = somar(10, function ($r, $c) {
    return $r + $c;
});

echo $resultado2; // Saída: 10 (resultado da função anônima)

?>
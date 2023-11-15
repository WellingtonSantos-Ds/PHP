<?php

// $lista = [10, 20, 24, 91, 18];

// Remove o último elemento do array. não precisa armazenar em uma variavel poque ele altera o parâmetro por referencia.  
array_pop($lista);
array_pop($lista);

// Remove  o primeiro elemento do array.
array_shift($lista);
print_r($lista);

// Procurando por um item especifico no array.
$numeros = [10, 20, 24, 91, 18];

// Procure por 91 no array numeros.
if(in_array(91, $numeros)){
   
   echo 'TEM NO ARRAY:';

} else{

   echo 'NÃO TEM NO ARRAY:';
}


//Busca se tem o item no array e retorna a posição. Caso não encontre retorna false.
$pos = array_search(18, $numeros);
echo $pos;


$numerosbus = [10, 20, 24, 91, 18];

// Ordenando em ordem crescente.
sort ( $numerosbus);

// Ordenando em ordem decremente.
rsort($numerosbus);

// Ordenando sem altera a chave da posição de cada elemento no array.

// Ordem crescente 
asort($numerosbus);

// Ordem decremente
arsort($numerosbus);

$nomes = 'Bonieky lacerda leal';

// transforma estring em arrays. de acordo com a condição do primeiro parâmetro.
$separado = explode(' ',$nomes);
print_r($separado);


$nomes = ['Bonieky', 'lacerda', 'leal'];

 // Transforma meu array em string de acordo com a condição do primeiro parâmetro.
$junto = implode(' ', $nomes);
echo $junto;
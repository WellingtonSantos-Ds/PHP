<?php

$cake1 = [
  'Açucar',
  'Farinha',
  'Ovos',
  'Leite',
  'Fermento em pó',  
];

e
$cake2 = [
  ...$cake1,// +5
  'corante',// 6
];
// O array spread nada mas é do que  array copiado em ordem.Somando os valores.
$cake2 = [
  'vasilha',// 0
  'copo',// 1
  ...$cake1,// +5
  'corante',// 7
];

echo $cake2[0];

$lista1 = ['pablo','adriele','junior'];
$lista2 = ['adriana','wellington','jão'];
$lista3 = [...$lista1,...$lista2, 'miranha','aut'];

print_r($lista3); // Imprime a lista de array.

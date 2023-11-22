<?php
$array = ['Wellington', 90, 'café','Azul'];

// $nome = $array [0];
// $idade = $array [1];
// $bebida = $array[2];
// $cor = $array [3];

//  Fazer o mesmo que o decima mas melhorado. As variares declaradas no list  ainda não existem els são criadas a partir do array e outra vantagem é que você consegue ver o array melhor. 
list($nome,$idade,$bebida,$cor) = $array;

echo $nome.' tem '.$idade.' anos e gosta de tomar '.$bebida.' com a cor '.$cor;
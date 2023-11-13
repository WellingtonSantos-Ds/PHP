<?php

//Condicional ternaria 

$name =  'Wellington ';
 

//(Se utiliza para uma variável que á inda  não foi criada. Ela verifica se o lastname existe ou não, se existir coloca se não, não coloca. (isset) se existe a variável.)

 $fullName = $name;
 $fullName .= isset ($lastName) ? $lastName : null;

 echo $fullName;


 //Condicional null CAO    

 //faz a mesma coisa que a de sima, sá que com menos linha. Se a variavel existir use ela mesmo (??) se não use null.

$nomeCompleto = $name;
$nomeCompleto .= $sobre ?? null;

//segundo exenplo;

$nomeCompleto = $name ?? "Visitante";
$nomeCompleto .= $sobre ?? null;

echo $nomeCompleto;






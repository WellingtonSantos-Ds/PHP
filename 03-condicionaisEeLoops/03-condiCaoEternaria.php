<?php

//Condicinal ternaria 

$name =  'wellington ';
 

//(Se utiliza para uma variavel que á inda  não foi criada. Ela verifica se o lastname existe ou não, se existir coloca se não, não coloca. (isset) se existe a variavel.)

 $fullName = $name;
 $fullName .= isset ($lastName) ? $lastName : null;

 echo $fullName;


 //Condicinal null CAO    

 //faz a mesma coisa que a de sima, sá que com menos linha. Se a variavel esistir use ela mesmo (??) se não use null.

$nomeConpleto = $name;
$nomeConpleto .= $sobre ?? null;

//segundo exenplo;

$nomeConpleto = $name ?? "Visitante";
$nomeConpleto .= $sobre ?? null;

echo $nomeConpleto;






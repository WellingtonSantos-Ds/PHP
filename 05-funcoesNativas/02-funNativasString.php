<?php
// (trim)Tirando espaços das strings.
$nomeSujo = '   wellington santos   ';
$nomeLimpo = trim($nomeSujo);

// (strlen) conta o números de caractere na variavel.
echo  'NOME SUJO = '.strlen($nomeSujo)."<br>";
echo 'NOME LIMPO = '.strlen($nomeLimpo)."<br>";

// Transformando texto em letras minúsculas 
echo strtolower($nomeLimpo)."<br>";

// Transformando texto em letras maiúsculas  
echo strtoupper($nomeLimpo)."<br>";

// substituindo uma letra ou um nome qual quer por outra coisa. eu digo pegue todo nome "santos" substitua por "Lacerda" da variavel $nomeSujo.
$nomeAlterado = str_replace('santos','Lacerda', $nomeSujo );
echo $nomeAlterado."<br>";

// (substr) pegas á quantidade de caractere escolhida. do 0 au 5 pega 5 caractere. do  3 au 3  começa do 3 e pega 3 caractere. do -3 ou 3. ele conta de traz para frente.
 
//passo primeiro a variavel como parâmetro.O segundo de onde cômeas e o terceiro onde termina.  
echo substr($nomeLimpo, 0 ,5 )."<br>";
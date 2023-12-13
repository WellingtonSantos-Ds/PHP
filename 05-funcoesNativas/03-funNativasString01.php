<?php
// Procura por determinado caractere  ou palavra dentro de outra string.
$nomeCompleto = 'wellington santos';
// Diz qual posição o (a)  aparece pela primeira vez. Se não tiver a letra (retorna nada ou -1). eu posso procura por uma palavra especifica como maçam e ver se tem no texto.
$posicao = strpos($nomeCompleto, 'a');
echo $posicao."<br>";

//Eu não posso verificar (>=0) por que (strpos) retorna (true) e true e 0 se confundem.
if ($posicao > -1){
   echo 'ACHOU !'."<br>";
}else{
   echo 'NÃO ACHOU !'."<br>";
}

//transformando a primeira palavra em maiúscula. 
echo ucfirst($nomeCompleto)."<br>";

//transformando cada primeira letra de cada palavra em maiúsculas.
echo ucwords($nomeCompleto)."<br>";

// Encontrando string cortando e colocando em um array. o primeiro  parâmetro é o que eu estou procurando e o segundo é a variavel 
$nomes = explode(' ',$nomeCompleto);
//apartir de cada espaço eu pego a palavra e coloco no array. 
print_r($nomes);


$numero = 12913.12;
// O primeiro parâmetro variável, o segundo é a quantidade de casas decimais, (opcional) o terceiro o simbolo da casa decimal, o quarto o simbolo do milhares.    
echo 'R$ '.number_format($numero, 2, ',' , '.');
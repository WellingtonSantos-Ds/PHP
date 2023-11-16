<?php
// O (filter_input) ele e um método que filtra e já verifica retornando true ou false dos inputs  GET e POST especificado no parâmetro que pode receber até quatro valores. 
$nome = filter_input(INPUT_GET,'nome');
$idade = filter_input(INPUT_GET,'idade');

if($nome && $idade){
   echo 'Nome = '. $nome."<br>";
   echo 'Idade = '.$idade; 
}else{
 
  // O header location tem que vir antis de qual quer  coisa ele tem que esta sozinho para evitar bags; e (exit) seve para as pessoas mais intencionas não verem o que vem depôs do header location
 header("Location: form.php");
 exit;
}

?>

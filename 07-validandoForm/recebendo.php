<?php
// O (filter_input) ele e um método que filtra e já verifica retornando true ou false dos inputs  GET e POST especificado no parâmetro que pode receber até quatro valores. 
$nome = filter_input(INPUT_GET,'nome');
$idade = filter_input(INPUT_GET,'idade');

//No FILTER_INPUT validamos informações vindas do usuário através de um input, já o FILTER_VAR verificamos e filtramos informações já contidas em uma variável.
filter_var($idade,"E o nome do filtro que eu queto");

if($nome && $idade){
   echo 'Nome = '. $nome."<br>";
   echo 'Idade = '.$idade; 
}else{
 
  // O header location tem que vir antis de qual quer  coisa ele tem que esta sozinho para evitar bags; e (exit) seve para as pessoas mais intencionas não verem o que vem depôs do header location
 header("Location: form.php");
 exit;
}

?>

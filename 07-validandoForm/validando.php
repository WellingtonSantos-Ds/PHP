<?php
// Como não tem como validar um nome. Alguém malicioso pode enviar um script através de um  compo de string.SANITIZE prefini isso.
$nome = filter_input(INPUT_GET,'nome',FILTER_SANITIZE_SPECIAL_CHARS);

// SANITIZE ele não é um validador. Ele altera os dados para ficar em conformidade com o que eu quero. que é do tipo int.também temos o FILTER_VALIDATE_INT para aceitar apenas inteiros;
$idade = filter_input(INPUT_GET,"idade",FILTER_SANITIZE_NUMBER_INT);

// O terceiro parâmetro é para validar se o campo preenchido é do tipo email. 
$email = filter_input(INPUT_GET,"email",
FILTER_VALIDATE_EMAIL);



//tipos  de FILTROS.
FILTER_VALIDATE_EMAIL
FILTER_VALIDATE_INT
FILTER_VALIDATE_IP
FILTER_VALIDATE_URL

//tipos de SANITIZE.
FILTER_SANITIZE_SPECIAL_CHARS
FILTER_SANITIZE_NUMBER_INT
FILTER_SANITIZE_STRING
FILTER_SANITIZE_EMAIL
FILTER_SANITIZE_URL
FILTER_SANITIZE_NUMBER_FLOAT



if($nome && $idade && $email){
   echo 'Nome = '. $nome."<br>";
   echo 'Email = '.$email ."<br>";
   echo 'Idade = '.$idade;

}else{
   header("location: enviando.php");
}




   
  

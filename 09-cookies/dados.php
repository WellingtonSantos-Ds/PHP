<?php
session_start();

$nome = filter_input(INPUT_GET,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
$idade = filter_input(INPUT_GET,'idade',FILTER_SANITIZE_NUMBER_INT);

if($nome && $idade){
   // O tempo diz quanto tempo o cookie vai ficar armazenado.
   $tempo = time() + (86400 * 30);

   // O setcookie é para pegar os parâmetros do cookie. Que pose ser três, sendo o primeiro para o nome do cookie, o segundo o nome da variavel que eu quero colocar, o terceiro para o tempo de armazenamento do cookie.
   setcookie('dduser',$nome,$tempo);

   echo 'Nome = '.$nome."<br>";
   echo 'Idade = '.$idade."<br>"."<br>";
   echo "<a href='form.php'>Voltar</a>";
}else{
   $_SESSION['aviso'] = 'PREENCHA TODOS OS CAMPOS';  
   header('Location: form.php');
   exit;

}



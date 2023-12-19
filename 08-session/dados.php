<?php
session_start();

$nome = filter_input(INPUT_GET,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
$idade = filter_input(INPUT_GET,'idade', FILTER_SANITIZE_NUMBER_INT);

if($nome && $idade){
   echo 'Nome = '. $nome. "<br>";
   echo 'Idade = '. $idade. "<br>"."<br>";
   echo "<a href='form.php'>Voltar</a>";
}else{
   $_SESSION['aviso'] = 'PREENCHA TODOS OS CAMPOS'; 
 header('Location: form.php');
 exit;
}


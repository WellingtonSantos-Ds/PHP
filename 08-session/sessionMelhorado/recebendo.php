<?php
session_start();
$nome = filter_input(INPUT_GET,'nome');
$idade = filter_input(INPUT_GET,'idade',FILTER_VALIDATE_INT);

if ($nome && $idade) {
   echo 'Nome = '.$nome." <br>";
   echo 'idade = '. $idade;
  
} else if($nome == false &&  $idade == false ){ 
   $_SESSION['nome'] = 'Nome incorreto'; 
   $_SESSION['idade'] = 'idade incorreta'; 
   header('location:formulario.php'); 

} else if($nome == false){ 
   $_SESSION['nome'] = 'Nome incorreto'; 
  header('location:formulario.php'); 

} else if($idade == false){ 
   $_SESSION['idade'] = 'Idade incorreta'; 
  header('location:formulario.php'); 
}


   


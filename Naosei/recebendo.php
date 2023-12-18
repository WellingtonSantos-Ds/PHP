<?php
session_start();
$nome = filter_input(INPUT_GET,'nome',FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_GET,'idade',FILTER_VALIDATE_INT);
  if($nome ){
   $_SESSION['nome'] = 'asdf';
   $_SESSION ['idade'] = $idade;
   echo 'NOME = '.$nome;
   
}else{
   header("location:formulario.php");

}


<?php

$nome = filter_input(INPUT_POST,'nome');

if($nome){
   setcookie('nomeCoo',$nome,time() + 8600 * 30);
} 
header('location:form.php');
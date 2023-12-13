<?php
$name = filter_input(INPUT_GET,'name',FILTER_SANITIZE_SPECIAL_CHARS);
if($name){
    $tep = time() + (86400 * 30);
   setcookie('nomeDoCookie',$name, $tep);
   echo 'Nome = ',$name." <a href='apagando.php'> Sair</a> ";
}else{
   header('Location: page.php');
}


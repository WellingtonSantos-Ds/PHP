<?php
session_start();
require('heder.php');

if($_SESSION['idade'] && $_SESSION['nome']){
   echo $_SESSION['nome']."<br>";
   echo $_SESSION['idade']."<br>";
   $_SESSION['nome'] = '';
   $_SESSION['nome'] = '' ;
   

}else if($_SESSION['nome']){
  echo $_SESSION['nome'];
  $_SESSION['nome'] = '';

}else if($_SESSION['idade']){
   echo $_SESSION['idade'];
   $_SESSION['idade'] = '';
}

?>

<form method="GET" action="recebendo.php">

   <label>
      Nome:
      <br>
      <input type="text" name="nome">
   </label>
   <br>
   <br>


   <label>
      Idade:
      <br>
      <input type="text" name="idade">
   </label>   
   <br>
   <br>

   <input type="submit" value="Enviar">

</form>


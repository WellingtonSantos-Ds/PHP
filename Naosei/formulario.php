<?php
session_start();
require('heder.php');



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


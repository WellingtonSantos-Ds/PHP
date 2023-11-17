<?php
require('cabeca.php');
?>

<a href="apagar.php">Limpar Cookie</a>
<br>
<br>
<form method="GET" action="dados.php">

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
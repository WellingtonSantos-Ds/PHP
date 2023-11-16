<?php

$nome = filter_input(INPUT_GET,'nome');

echo 'Nome = '. $nome; 

?>
<form method="get" action ="recebedor.php">
  safd
   <label>
      Nome: 
      <br>
      <input type="text" name="nome">
   </label>
    <br>
    <br>
   <label >
      Idade:
      <br>
      <input type="text" name="idade">
   </label>
      <br>
      <br>
    <input type="submit" value="Enviar">
</form> 
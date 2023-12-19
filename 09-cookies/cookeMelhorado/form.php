<h1>CABEÇALHO</h1>
<?php
if(isset($_COOKIE['nomeCoo'])){
   echo 'Nome De Usuário = '. $_COOKIE['nomeCoo'];
}
?>
<br>
<a href="apagarCooke.php">Sair</a>
<form method="POST" action="resebeForm.php">

   <label>
      Nome:
      <br>
      <input type="text" name="nome">
   </label>
   <button type="submit">Enviar</button>
</form> 
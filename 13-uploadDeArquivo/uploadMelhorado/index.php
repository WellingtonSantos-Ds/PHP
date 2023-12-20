<?php
session_start();

if($_SESSION['usCpf']){
   echo 'Arquivo salvo com CPF = '.$_SESSION['usCpf'];
   $_SESSION['usCpf']='';
}

?>
<h1>RECEBENDO IMG</h1>

<form  method="post" action="recebeImg.php" enctype="multipart/form-data">
  
   <label>
      <p>CPF: 
        <input type="number" name="cpf">
      </p>
  </label> 
   <br>

   <label >
      <input type="file" name="recebeimg">
   </label>
   <br><br>
   
    <input type="submit" value="Enviar">
</form>
<h1>Cabeçalho</h1>
<hr>
<?php
session_start();
if($_SESSION['aviso']){
   echo $_SESSION['aviso'];
   $_SESSION['aviso'] ='';
}
?>


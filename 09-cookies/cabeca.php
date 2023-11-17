<h1>Cabeçalho</h1>
<?php
session_start();
// falando se tiver cookie eu coloco no reader e mostro o nome do valor atribuído do setcookie. o isset diz se tiver o cookie coloque se não tiver tudo bem. sem o isset pose dar erro porque nem sempre tem cookie.
if(isset($_COOKIE['dduser'])){
   $mostre = $_COOKIE['dduser'];
   echo "<h3>".'Cookie Do Usuário = '.$mostre."</h3>";
   $_SESSION['aviso']='';
}


if(isset($_SESSION['aviso'])){
   echo $_SESSION['aviso'];
   $_SESSION['aviso']='';
}

?>
<hr/>
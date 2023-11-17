<?php
// Apagando o cookie com o time() que set o segundo exato em que eu estou assim não deixando nenhum cookie armazenado
setcookie('dduser','',time() );

//Faz com que voce fique na pagina principal apos apertar o botão paa apagar o cookie. 
header('Location: form.php');

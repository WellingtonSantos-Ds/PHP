
<?php
// Uma seção eu consigo armazenar e ler as informações independente da pagina que eu esteja.Seção parece com o Cooke mas ou Invés de salvar infamações no computador do usuários ele salva no servidor e então ele sabe qual usuário esta asseado.

//todas a paginas que eu for utilizar com uma seção eu preciso colocar o session_start(); para identificar a seção.
session_start();
//Se tiver aviso mostra.
if($_SESSION['aviso']){
   echo $_SESSION['aviso'];
   //Limpando o array aviso.
   $_SESSION['aviso']='';
}
require('nomeDaPasta.php');


if($variavel && $outraVariavel){
   //armazenado
}else{
   //$_SESSION é um array que pode salvar outro array string int o que você quiser.
   $_SESSION['aviso'] = 'PREENCHA OS DADOS CORRETAMENTE!';

   header('Location: nomeDaPasta');
   exit;
}

?>

<h1>Texto qualquer</h1>


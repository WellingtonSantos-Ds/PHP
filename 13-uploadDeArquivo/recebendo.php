<?php

// echo "<pre>";//transforma o array em código. 
// print_r($_FILES); // imprimindo array files.

// // Salvando o arquivo para não perder depois que a requisição acabar.
  
// // Aqui eu estou pegando de files ['arquivo'] que é meu input html, a propriedade ['name'] que é nome do arquivo enviado o pelo usuário. 
// $name = $_FILES['arquivo']['name'];

// // Aqui eu estou pegando o arquivo do array ['arquivo'] na pasta ['tmp_name'] e salvando na menha pasta (salvandoPng);
// move_uploaded_file($_FILES['arquivo']['tmp_name'],'salvandoPng/'.$name);
// // pode ser assim também.
// //move_uploaded_file($_FILES['arquivo']['tmp_name'],'salvandoPng/'.$_FILES['arquivo']['name']);
// echo 'Salvo';




//verificando o tipo do arquivo salvo.
$tipo = ['image/jpe','image/png','image/jpg'];
// echo '<pre>';
// print_r($_FILES);
//verificando dentro do array com a função in_array. pegando de arquivo o type, que é mais seguro do que o nome original do arquivo.
if(in_array($_FILES['arquivo']['type'],$tipo)){
   
   // salvando com nome aleatório. criando o pequeno hash com o md5 e concatenado com outra funções
$name = md5(time().round(100)).'.jpg';
move_uploaded_file($_FILES['arquivo']['tmp_name'],'salvandoPng/'.$name);
echo 'Salvo';

}else{
   echo 'Arquivo Não permitido';

}
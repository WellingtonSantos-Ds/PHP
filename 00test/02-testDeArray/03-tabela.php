<?php
$array =[
   'nome'=> 'wellington',
   'idade' => 90,
   'empresa' => 'Casa',
   'cor' => 'azul',
   'profissao' => 'fazedor de bolo'
];
?>

<table border="1">

   <?php foreach($array as $chave => $valor){
      "<tr>";
         echo "<th>$chave</th>";
         echo "<td>$valor</td>";
      "</tr>";
    }
  ?>
</table>
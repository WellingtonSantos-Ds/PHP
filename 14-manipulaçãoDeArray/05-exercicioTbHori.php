<?php
$array =[
   'nome'=> 'wellington',
   'idade' => 90,
   'empresa' => 'Casa',
   'cor' => 'azul',
   'profissao' => 'fazedor de bolo',

];

$chaves = array_keys($array);
$valores = array_values($array);

?>

<table border="1">
   <tr>
      <?php foreach($chaves as $todasChave):?>
         <th><?php echo $todasChave?></th>
      <?php endforeach;?>
   </tr>

   <tr>
      <?php foreach($valores as $todosValores):?>
         <td><?php echo $todosValores?></td>
      <?php endforeach;?>
   </tr>
</table>

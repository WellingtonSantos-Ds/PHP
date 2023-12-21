<?php
$array = [ 
   'nome'=> 'wellington',
   'idade' => 90,
   'empresa' => 'Casa',
   'cor' => 'azul',
   'profissao' => 'fazedor de bolo'
];
?>
<table border="1">
   <?php foreach($array as $chave => $valor):?>
      <tr>
        <th><?php echo $chave;?></th>
        <td><?php echo $valor; ?></td>
      </tr>       
   <?php endforeach ?> 
</table>


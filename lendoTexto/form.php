

<h1>RECEBENDO O TEXTO</h1>

<form method="get" action="dados.php">
   <label>
      <input type="text" name="texto">
   </label>
   <button type="submit">Enviar</button>
</form>

<?php

   $texto = filter_input(INPUT_GET,'texto');
   
   if($texto){  
      
      $add = file_get_contents('novo.txt');
      
      $add .= "\n$texto"; 
      
      file_put_contents('novo.txt',$add);    
      
      $array = explode("\n",$add);   
    
      "<ul>";

         foreach( $array as  $value) {
            echo "<li> $value </li>";
         }
         
      "</ul>";
   }

   
?>




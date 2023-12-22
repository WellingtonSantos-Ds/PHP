<?php
$array = [
   ['nome' => 'Fulano', 'sexo' => 'M', 'nota' => 9],  
   ['nome' => 'Ciclano', 'sexo' => 'M', 'nota' => 7],  
   ['nome' => 'Beltrano', 'sexo' => 'F', 'nota' => 10],  
   ['nome' => 'Paulo', 'sexo' => 'M', 'nota' => 8],  
   ['nome' => 'Candida', 'sexo' => 'F', 'nota' => 9],  
   ['nome' => 'Jessica', 'sexo' => 'F', 'nota' => 9],  
]; 

function somaM($subtotal, $item){
   if($item['sexo'] == 'M'){
    
      $subtotal++;
   }
   return $subtotal; 
}

function notaM($sub,$item){
   if($item['sexo'] == 'M'){
         
      $sub += $item['nota'];  
   }
   return $sub;
}

$notasM = array_reduce($array, 'notaM');
$totalM = array_reduce($array,'somaM');

echo 'Total De Homens = '.$totalM.'<br>' ; 
echo 'Notas Dos Homens = '.$notasM.'<br>' ; 
echo 'Media dos Homes = '. $notasM / $totalM.'<br>';
echo "<br>";


$totalF = array_reduce($array, 'totalF'); 
$notasF = array_reduce($array, 'notaF'); 

function totalF($sub, $item){
   if($item['sexo'] == 'F'){      
      $sub ++;
   }
   return $sub;
}

function notaF ($sub, $item){
   if($item['sexo'] == 'F'){
      $sub += $item['nota']; 
   }
   return $sub;
}

echo 'Total De Mulheres = '.$totalF.'<br>' ; 
echo  'Notas Das Mulheres = '.$notasF.'<br>' ; 
echo 'Media Das Mulheres = '. round($notasF / $totalF);
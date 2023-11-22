<?php

$pessoas = [
 ['nome' => 'Fulano', 'sexo' => 'M', 'nota' => 9],  
 ['nome' => 'Ciclano', 'sexo' => 'M', 'nota' => 7],  
 ['nome' => 'Beltrano', 'sexo' => 'F', 'nota' => 10],  
 ['nome' => 'Paulo', 'sexo' => 'M', 'nota' => 8],  
 ['nome' => 'Candida', 'sexo' => 'F', 'nota' => 9],  
 ['nome' => 'Jessica', 'sexo' => 'F', 'nota' => 9],  

];

//contando quantos alunos do sexo masculino eu tenho;
function contando ($guarda, $mapeia){
   // Não posso passar ($pessoas) porque ($mapeia) é quem vai mapear o  array passado pelo array_reduce para a função contando (contando passa a ser o array). 'não é exatamente assim mas fica mas faseio de intender'. 
   if($mapeia['sexo'] === 'M'){
      $guarda = $guarda + 1;
      // Ou guarda++ 
   }
 return $guarda;
}
$total = array_reduce($pessoas, 'contando');

echo 'Total De Homem = '.$total;


// contado notas 

function somando($totDeNotas, $mapeando){
   if($mapeando['sexo'] === 'M'){
      $totDeNotas = $totDeNotas + $mapeando['nota'];
   }
  return $totDeNotas;
} 

$total =  array_reduce($pessoas, 'somando');
echo 'Notas De todos os homens = ' . $total;





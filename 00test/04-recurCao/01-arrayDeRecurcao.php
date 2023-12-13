<?php

$list = [];

function coloca($add){
   global $list;
   if ($add < 1){
      return 1;

   }else {
      
    $iso = $add * coloca($add-1);
    array_push($list,$iso);
    return $iso ;   
   }   
}

echo coloca(5)."<br>";
print_r($list);

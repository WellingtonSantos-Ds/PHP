<?php
echo "<pre>";
print_r($_FILES);

if(in_array($_FILES['arq']['type'], array('image/png','image/jpeg'))){
  
  $crip = md5(100).'.png';
  move_uploaded_file($_FILES['arq']['tmp_name'],'saveimg/'.$crip);
  
  echo 'Arquivo Salvo';

}else{
  
  echo "Arquivo Não Salvo";
}

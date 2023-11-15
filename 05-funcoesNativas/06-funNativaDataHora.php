<?php

// O php conta a data em mile segundos a partir do dia  01/01/1970; olhar o resto das representações na documentação.
echo time();

// Colocando data;
echo date('d/m/Y');

// Data com horário
echo date('d/m/Y H:i:s');

// As datas por padrão vão para o servidor no formato internacional que é (y/m/d) para colocar no padrão normal temos que converter.

$datapd = '2020-03-30'; // pode ser no lugar dessa string uma a função data.

$tempo = strtotime($datapd);

$comvertido = date('d/m/Y',$tempo);

echo $comvertido."<br>";

//Maneira mas fácil;
echo date('d/m/Y',strtotime($datapd));


 
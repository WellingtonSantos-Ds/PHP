 <?php

$text = file_get_contents('lendo.txt');
echo $text;
$text .= "\n colocando um nove texto";
file_put_contents('lendo.txt',$text);
echo $text;



<?php
$info = array('Café', 'marrom', 'cafeína');

foreach ($info as $indice => $value) {
    echo "Indice $indice , valor $value".PHP_EOL;
}

unset($info[1]);
echo "------------------------".PHP_EOL;
foreach ($info as $indice => $value) {
    echo "Indice $indice , valor $value".PHP_EOL;
}
 

echo "Removendo variaveis...".PHP_EOL;
$msg = "Oi eu sou  o Goku.";
echo $msg.PHP_EOL;
unset($msg);
echo $msg .PHP_EOL; 

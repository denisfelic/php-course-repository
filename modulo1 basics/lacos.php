<?php

echo "Laço for".PHP_EOL;
for ($i =0; $i < 3; $i++){
    echo $i . PHP_EOL;
}
$n1 = 0;
echo "Laço While ".PHP_EOL;
while ($n1 < 3){
    echo $n1.PHP_EOL;
    $n1++;
}
echo "Laço Do While".PHP_EOL;
$n1=0;
do{
    echo $n1.PHP_EOL;
    $n1++;
}while($n1<3);

echo "TESTE".PHP_EOL;
for ($i =0;$i<15;$i++){
    if ($i == 8) {
        continue;
    }
   elseif ($i == 11){
        echo "Break no $i\n O proximo número seria ". ($i+1) .PHP_EOL;
        break;
    }
    else {
        echo $i . PHP_EOL;
    }

}
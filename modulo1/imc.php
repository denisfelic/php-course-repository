<?php

$peso = 120;
$altura = 1.95;
$imc = $peso / ($altura**2);
if($imc <19 ){
    echo "abaixo do peso, IMC: $imc".PHP_EOL;
}
else if($imc <  25){
    echo "Peso normal, IMC: $imc".PHP_EOL;
}
else if($imc < 30){
    echo "Sobrepeso, IMC: $imc".PHP_EOL;
}
else if ($imc < 40){
    echo "Obesidade do tipo I, IMC: $imc".PHP_EOL;
}
else {
    echo "Obesidade Morobida, IMC:  $imc".PHP_EOL;
}
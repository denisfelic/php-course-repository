<?php
$arrayList = [
    "Um",
    "Dois",
    "Tres",
    "Quatro"
];

list ($indice1, $indice2, $indice3) = $arrayList;
/*
 * Mesma coisa que isto:
 * $indice1 = $arrayList[0];
 * $indice2 = $arrayList[1];
 * $indice3 = $arrayList[2];
 */
echo "$indice1 $indice2 $indice3" . PHP_EOL;

$pessoas = [

    'titular' => 'Monica',
    'saldo' => 2400.0,

    'titular' => 'Fernandez',
    'saldo' => 1230.0,

    'titular' => 'Angelica',
    'saldo' => 4249.0
];

list ('saldo' => $saldoConta1, 'titular' => $titularConta1) = $pessoas;

echo "Titular: $titularConta1, Saldo: $saldoConta1" . PHP_EOL;
echo PHP_EOL;


['saldo' => $saldoConta1, 'titular' => $titularConta1] = $pessoas;

echo "Titular: $titularConta1, Saldo: $saldoConta1" . PHP_EOL;
echo PHP_EOL;


foreach ($pessoas as $value) {
    echo "$value".PHP_EOL;
}






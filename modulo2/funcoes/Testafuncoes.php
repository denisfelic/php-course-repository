<?php
//Incluir arquivos externos.
include 'funcoes.php'; //- Não essencial.
 //require 'funcoes.php';// Essencial
 // require_once 'funcoes.php'; Essencial porem apenas uma vez.
olaMundo();
exibirMenssagem("Planeta Terra.");



echo "Soma: " . somaDoisNumeros(10, 20) . PHP_EOL;

$contas = [
    '344.434.434-44' => [
        'titular' => 'Vinicios',
        'saldo' => 1200.0
    ],
    '864.436.656-23' => [
        'titular' => 'Lucia',
        'saldo' => 3600.0
    ],
    '124.423.324-34' => [
        'titular' => 'Mario',
        'saldo' => 14000.0
    ],
    '233-344-434-44' => [
        'titular' => 'Alina',
        'saldo' => 5300.0
    ]
];

foreach ($contas as $cpf => $values) {
    echo "$cpf - Titular - $values[titular], Saldo: $values[saldo]" . PHP_EOL;
}

echo "Tentando sacar o valor de 200 reais da conta 233-344-434-44..." . PHP_EOL;
$contas['233-344-434-44'] = sacar($contas["233-344-434-44"], 200);
echo "Novo saldo: ". $contas['233-344-434-44']['saldo'] . PHP_EOL;


echo "Depositando 500 reais na conta 233-344-434-44" . PHP_EOL;
$contas['233-344-434-44'] = deposita($contas['233-344-434-44'], 549.48);
echo "Novo Saldo:  ".$contas['233-344-434-44']['saldo'] . PHP_EOL;









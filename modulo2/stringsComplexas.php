<?php
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

//echo "Essa é uma forma de ler" . PHP_EOL;
//echo "Esta é uma forma  $contas[344.434.434-44]";
echo "Forma mais complexa porem melhor e não da erro." . PHP_EOL;
echo " this - {$contas['344.434.434-44']['titular']}" . PHP_EOL;

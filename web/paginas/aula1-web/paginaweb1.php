<?php
$clientes = [
    [
        'nome' => 'Josney Franca',
        'cargo' => 'Vigilante',
        'salario' => 2300.0,
        'empresa' => 'Master'
    ],
    [
        'nome' => 'Monica Rodriguez',
        'cargo' => 'Atendente',
        'salario' => 1800.0,
        'empresa' => 'Teleperformace'
    ],
    [
        'nome' => 'Claudo Lopes',
        'cargo' => 'Advogado',
        'salario' => 7500.0,
        'empresa' => 'H&R Advocacia'
    ]
];

foreach ($clientes as $cpf => $atual) {
    echo "ID - $cpf {$atual['nome']} " . PHP_EOL;
}
?>

<html>
<head>


<body>
</body>
</head>
</html>

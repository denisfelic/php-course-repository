<?php

$contas = [
    [
        'nome' => 'Denoca Silva',
        'cargo' => 'Programador',
        'salario' => 5700.0,
        'empresa' => 'IC Tech Solutions',
        'contato' => [
            'telefone' => '(11)9999-0397',
            'email' => 'dsfd.fdsddf@gmail.com'
        ],
        'pais' => 'Brasil',
        'cidade' => 'São Paulo',
        'UF' => 'SP'
    ],
    [
        'nome' => 'Eleonor Malvina',
        'cargo' => 'Analista de Sistemas',
        'salario' => 4500.0,
        'empresa' => 'IC Tech Solutions',
        'contato' => [
            'telefone' => '(11)9648-4531',
            'email' => 'eleonor4345.contato@gmail.com'
        ],
        'pais' => 'Brasil',
        'cidade' => 'São Paulo',
        'UF' => 'SP'
    ],
];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Clientes cadastrados</h1>
<ul>
    <?php foreach ($contas as $indice => $item) { ?>
        <hr>
        <ul>
            ID: <?php echo $indice ?>
            <li>
                Nome: <?=$item['nome'] ?>
                <ul>
                    <li>
                        Cargo <?= $item['cargo'] ?>
                    </li>
                    <li>
                        Empresa: <?php echo $item['empresa'] ?>
                    </li>
                    <li>
                        Salario: <?php echo $item['salario'] ?>
                    </li>
                    <li>
                        Contato
                        <ul>
                            <li>Email: <?php echo $item['contato']['email'] ?></li>
                            <li>Telefone: <?php echo $item['contato']['telefone'] ?></li>
                        </ul>
                    </li>
                    <li>
                        Endereço: <?php echo $item['cidade'] ?> - <?php echo $item['UF'] ?> , <?php echo $item['pais'] ?>
                    </li>
                </ul>
            </li>
        </ul>

    <?php } ?>
</ul>
<hr>
</body>
</html>

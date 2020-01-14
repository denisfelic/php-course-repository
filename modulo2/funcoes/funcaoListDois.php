<?php

$contaCorrente = [
    '321.342.344-96' => [
        "nome" => "Marcela",
        "idade"=> 23,
        "cargo"=> "estagiaria",
        "salario" => 900.0
    ],
    '432.454.344-04' => [
        "nome" => "Denis",
        "idade"=> 23,
        "cargo"=> "Programador Junior",
        "salario" => 3000.0
    ],
    '942.359.259-45' => [
        "nome" => "Carlos",
        "idade"=> 23,
        "cargo"=> "Programador Pleno",
        "salario" => 4600.6
    ],
];

foreach ($contaCorrente as $value) {
   //FUNLÇAO LIST
list('nome' => $titular, 'salario' =>$salario) = $value;
echo  "Titular: $titular, Salario: $salario".PHP_EOL;
}

echo  "--------------------------".PHP_EOL;

foreach ($contaCorrente as $value) {
    //OUTRA SINTAXE DA MESMA FUNÇAO LIST
    ['nome' => $titular, 'salario' =>$salario] = $value;
    echo  "Titular: $titular, Salario: $salario".PHP_EOL;
}
echo  "--------------------------".PHP_EOL;
echo  "--------------------------".PHP_EOL;




///OUTROS EXEMPLOS
echo  "--------------------------".PHP_EOL;

$info = array('Café', 'marrom', 'cafeína');
[$bebida, $cor, $substancia] = $info;
echo "$bebida é $cor e $substancia o faz especial.\n";
echo  "--------------------------".PHP_EOL;

$info = array('Café', 'marrom', 'cafeína');
list($bebida, $cor, $substancia) = $info;
echo "$bebida é $cor e $substancia o faz especial.\n";



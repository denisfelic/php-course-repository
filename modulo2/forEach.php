<?php

$conta1 = [
    "nome" => "Lucas",
    "idade"=> 23,
    "cargo"=> "estagiario",
    "salario" => 300.0
];

$conta2 = [
    "nome" => "Francisca",
    "idade"=> 41,
    "cargo"=> "Gerente",
    "salario" => 11000.0
];

$conta3 = [
    "nome" => "Fernando",
    "idade"=> 29,
    "cargo"=> "Analista",
    "salario" => 5000.0
];

$contas = [$conta1,$conta2,$conta3];

foreach ($contas as $contaUnica){
// foreach equivale á: $contaUnica = $contas[$i];
    echo "Usuario: $contaUnica[nome], Idade: $contaUnica[idade], Cargo: $contaUnica[cargo], Salario: $contaUnica[salario] " .PHP_EOL;
}

$contaCorrente = [
    321342344 => $conta1,
    432454344 => $conta2,
    942359259 => $conta3,
];

foreach ($contaCorrente as $indice => $contaAtual){
    echo "Indice- $indice - NOME: $contaAtual[nome]".PHP_EOL;
    echo " Mi".$indice["nome"].PHP_EOL;
}









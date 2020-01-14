<?php
require 'Conta.php';


$conta1 = new Conta2();
$conta1->nome = 'Denoca';
var_dump($conta1);

$conta2 = $conta1;

echo $conta1->nome . PHP_EOL;
echo $conta2->nome . PHP_EOL;

$conta2-> nome = 'chirley';
echo $conta1->nome . PHP_EOL;
echo $conta2->nome . PHP_EOL;

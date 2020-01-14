<?php
require 'Conta2.php';


$conta1 = new Conta2();
echo $conta1->getSaldo() . PHP_EOL;
$conta1->sacar(1200);
echo $conta1->getSaldo() . PHP_EOL;
$conta1->deposita(200);
echo $conta1->getSaldo() . PHP_EOL;
$conta1->sacar(300);
$conta1->sacar(-100);
echo $conta1->getSaldo() . PHP_EOL;
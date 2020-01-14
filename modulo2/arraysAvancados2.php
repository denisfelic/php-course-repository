<?php
$carro1 = [
    "marca" => "VW",
    "modelo" => "Fusca",
    "cor" => "Azul"
];

$carro2 = [
    "marca" => "GM",
    "modelo" => "Cobalt",
    "cor" => "Preto"
];

$carro3 = [
    "marca" => "Fiat",
    "modelo" => "Uno",
    "cor" => "Vermelho"
];

$carro4 = [
    "marca" => "Ford",
    "modelo" => "Ká",
    "cor" => "Branco"
];

$placas = [
    "UTF-3455" => $carro1,
    "JHK-3242" => $carro2,
    "LFD-9088" => $carro3,
    "YDG-4380" => $carro4
];

foreach ($placas as $placas => $value) {
    echo "Placa: $placas, Marca: $value[marca], Modelo: $value[modelo], Cor: $value[cor]" . PHP_EOL;
}

echo "Novo carro adicionado" . PHP_EOL;
$carro5 = [
    "marca" => "Jeep",
    "modelo" => "Renegate",
    "cor" => "Verde"
];

$placas[] = ["###" => $carro5];

foreach ($placas as $placas => $value) {
    echo "Placa: $placas, Marca: $value[marca], Modelo: $value[modelo], Cor: $value[cor]" . PHP_EOL;
}




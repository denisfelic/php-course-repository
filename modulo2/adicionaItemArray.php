<?php


$items = ['item1', 'item2', 'item3', 'item4'];

imprimeArray($items, "Item 6");

echo "Adicionando um novo item ao array...".PHP_EOL;
$items[] = "item5";
imprimeArray($items, "Item 6");




function imprimeArray(array $array) {
    $cont =0;
    foreach ($array as $value) {
        
        echo "Indice $cont - Item: $value".PHP_EOL;
        $cont++;
    }
}
<?php

//Array númerico padrão.
$arrayComum = ['Indice1', "Indice2", "Indice3"];

//Array associativo
//$arrayPessoas = ['nome' => 'Marcos', 'idade' => 23, "cpf" => '3234.2424.24']; pode ser assim, 
// mas geralmente se quebra,  assim:
$pessoa1 = [
    'nome' => 'Marcos',
    'idade' => 23, 
    "cpf" => '3234.2424.24',
    'nome' => 'Milena',
    'nome' => 'Marcos', //o multimo sempre sobrescreve.
    
];
$pessoa2 = [
    'nome' => 'João',
    'idade' => 23,
    "cpf" => '3234.2424.24'
];
$pessoas = [$pessoa1,$pessoa2];

echo $pessoa1['nome'].PHP_EOL;  // não tem diferenças de aspas simples para duplas.
echo  $pessoa1["nome"].PHP_EOL;

echo PHP_EOL;
for($i=0;$i< count($pessoas); $i++){
    echo $pessoas[$i]['nome'].PHP_EOL;
}

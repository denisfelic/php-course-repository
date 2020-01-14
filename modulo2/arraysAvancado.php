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

    //adicionando valores.
    
$contaCorrente[] =  [   // caso eu não adicione o valor ele vai para númerico
    "nome" => "Monica",
    "idade"=> 23,
    "cargo"=> "Data Scientist Pleno",
    "salario" => 7600.6
];
$contaCorrente['434.535.888-55'] =  [
    "nome" => "Hingrid",
    "idade"=> 45,
    "cargo"=> "Chefe",
    "salario" => 17600.6
];

foreach ($contaCorrente as $cpf => $conta){
    
echo "cpf - $cpf". " Nome:  " .$conta["nome"].PHP_EOL;
}

$teste = [ //indice 0 = false, indice 1 = true, porém sempre sobrescreve, por isso só mostrara 2;
    true => "denoca",
    false => "ursula",
    true => "kayoba",
    false => "vinho",
    true => "tiodu",
    false => "rubens",
];

foreach ($teste as $indice => $nome){
    echo "Indicice: $indice - NOME:  $nome".PHP_EOL;
}


echo "Inicio do teste com FOR normal.".PHP_EOL;
$numeros = [
    1 => 'a',
    2 => 'b',
    6 => 'c',
    7 => 'd',
         'e',
         'f',
         'g',
];


for($i=1;$i<count($numeros);$i++){
    echo $numeros[$i].PHP_EOL;
}
echo "Fim do teste".PHP_EOL;

echo "Teste com o forEach".PHP_EOL;

foreach ($numeros as $value) {
  echo $value.PHP_EOL;
}
echo "Fim do teste".PHP_EOL;



$basico = ["Denoca", "Ucl"];
//  é possivevl acessar uma array das seguintes formas $basico[0]; ou $basico{0};







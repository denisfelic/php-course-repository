<?php

$idade = 16;
$numeroDePessoas = 0;
echo  "Olá me diga sua idade para que eu possa libearar sua passagem por gentiliza." . PHP_EOL;
if($idade < 18){
    if($idade > 15 && $numeroDePessoas > 1){
        echo "Apesar de você ter apenas $idade anos, você pode entrar por estar acompanhado de";
        echo "mais $numeroDePessoas pessoas.\n Aproveite a festa." . PHP_EOL;
    }else {
        echo "Infelizmente você não pode entrar pois você tem apenas $idade anos." . PHP_EOL;
    }
}
else {
        echo "Seja bem vindo, aproveite a festa.".PHP_EOL;
    }

$boolea = true;
$palavra = "OLá";
$num = 2;
$decimal = 2.323;
if ($palavra == true){
    echo "Isso foi compilado O.o wtf". PHP_EOL;
}

//$variavel = $condicao ? $valorSeVerdadeiro : $valorSeFalso;
$mensagem = $idade < 18 ? "Verdadeiro".PHP_EOL : "Falso".PHP_EOL; //Operador ternario.
echo "Ok $mensagem" . PHP_EOL;
echo $mensagem;
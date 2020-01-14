<?php
$idade = 22;
$nome = "Denis";
echo 'Está é uma forma de concatenar Strings com variaveis.' . $idade . '...\n';
//echo 'Está é uma forma de concatenar Strings com variaveis.'.$idade;
echo "Mas também pode ser feito desta forma.\n";
echo "Olá meu nome é $nome e eu tenho $idade de idade.\n";
echo "Isso é apenas um \fteste.\n";
echo "Vou dar um \rpasseio de carro.\n";
echo "Isso é um tab vertical\v haha\n";

echo "\n Outra forma de \"pular\" linha.\n";
echo "Olá meu nome é $nome e tenho $idade anos." . PHP_EOL;
echo "Como você vai?" . PHP_EOL;

$palavra1 = "Essa é uma String";
$palavra2 = ", e essa também é uma String.";
echo  $palavra1.$palavra2;
/*
echo 'isto é uma string comum';

echo 'Você pode incluir novas linhas em strings,
dessa maneira que estará
tudo bem';

// Imprime: Arnold disse uma vez: "I'll be back"
echo 'Arnold disse uma vez: "I\'ll be back"';

// Imprime: Você tem certeza em apagar C:\*.*?
echo 'Você tem certeza em apagar C:\\*.*?';

// Imprime: Você tem certeza em apagar C:\*.*?
echo 'Você tem certeza em apagar C:\*.*?';

// Imprime: Isto não será substituido: \n uma nova linha
echo 'Isto não será substituido: \n uma nova linha';

// Imprime: Variáveis $também não $expandem
echo 'Variáveis $também não $expandem';
*/